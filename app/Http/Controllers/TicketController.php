<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Mail\PaymentNotificationMail;
use App\Payment;
use App\Ticket;
use App\UserTicket;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    private function getTicketCode ($ticket, $token) {
        // Tipe Presale + ID
        $hashOne = null;
        $hashTwo = null;
        $hashThree = null;
        $hashFour = null;

        switch ($ticket->type) {
            case 'presale-1':
                $hashOne = 'A';
                break;
            case 'presale-2':
                $hashOne = 'B';
                break;
            case 'presale-3':
                $hashOne = 'C';
                break;
        }

        $hashOne .= substr($token, 0, 3);

        $hashTwo = substr($token, 8, 4);

        $hashThree = Auth::user()->role === 'user' ? 'A' : 'X';
        $hashThree .= substr($token, 10, 3);
        
        $hashFour = substr($token, 4, 4);
        
        return $hashOne . ' ' . $hashTwo . ' ' . $hashThree . ' ' . $hashFour; 
    }
    
    public function getCurrentTicketByDate($date)
    {
        $presaleOneStartDate = date('Y-m-d', strtotime('2021-05-11'));
        $presaleOneEndDate = date('Y-m-d', strtotime('2021-05-17'));
        $presaleTwoStartDate = date('Y-m-d', strtotime('2021-05-18'));
        $presaleTwoEndDate = date('Y-m-d', strtotime('2021-05-22'));
        $presaleThreeStartDate = date('Y-m-d', strtotime('2021-05-23'));
        $presaleThreeEndDate = date('Y-m-d', strtotime('2021-05-27'));

        if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleOneStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleOneEndDate)
        ) {
            return 'presale-1';
        } else if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleTwoStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleTwoEndDate)
        ) {
            return 'presale-2';
        } else if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleThreeStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleThreeEndDate)
        ) {
            return 'presale-3';
        } else {
            return null;
        }
    }
    
    public function payment(Request $request)
    {
        if (!Auth::check()) { redirect('/'); }

        $userId = Auth::id();
        $userHasPayment = Payment::where('user_id', $userId)->first();
        if ($userHasPayment) {
            return redirect()
                    ->route('member.ticket')
                    ->with('info', 'Kamu sudah melakukan pembelian tiket.');
        }

        $ticketType = $this->getCurrentTicketByDate(date('Y-m-d'));
        if (!$ticketType) {
            return redirect('/member/dashboard')
                    ->with('info', 'Pembelian ticket belum dimulai');
        }
        
        $user = Auth::user();
        $ticket = Ticket::where('type', $ticketType)->first();
        if (!$ticket->stock) {
            return redirect()
                    ->route('member.dashboard')
                    ->with('info', 'Mohon maaf tiket sudah habis terjual.');
        }

        if ((!$user->street_address && $ticket->type == 'presale-1') || (!$user->street_address && $ticket->type == 'presale-2')) {
            return redirect()
                ->route('member.profile')
                ->with('warning', 'Mohon isi alamat terlebih dahulu.');
        }

        return view('ticket.payment', [
            'user' => $user,
            'ticket' => $ticket
        ]);
    }

    public function storePayment(StorePaymentRequest $request)
    {
        $validated = $request->validated();
        
        $ticket = Ticket::where('type', $request->type)->first();
        $extension = $request->payment_proof->getClientOriginalExtension();
        $paymentProof = time() . '.' . $extension;
        $path = $request->payment_proof->storeAs('public/img/payment_proof', $paymentProof);

        $payment = Payment::create([
            'user_id' => Auth::id(),
            'ticket_id' => $ticket->id,
            'payment_method' => $validated['payment_method'],
            'payment_proof' => $paymentProof,
            'payment_path' => $path
        ]);
        if (!$payment) {
            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan, mohon ulangi.');
        }

        $token = Str::random(16);
        $code = $this->getTicketCode($ticket, $token);

        UserTicket::create([
            'payment_id' => $payment->id,
            'token' => $token,
            'code' => $code
        ]);

        $detailPayment = Payment::where('id', $payment->id)->with('ticket')->first();
        Mail::to(Auth::user()->email_address)->queue(new PaymentNotificationMail(Auth::user(), $detailPayment));

        $ticket->stock = $ticket->stock - 1;
        $ticket->save();

        return redirect()
                ->route('invoice', [
                    'payment_id' => explode('.', $payment->payment_proof)[0],
                    'proof' => explode('.', $payment->payment_proof)[1]
                ])
                ->with('success', 'Invoice berhasil dikirim ke email kamu.');
    }

    public function invoice(Request $request)
    {
        $payment_id = $request->query('payment_id');
        $payment_proof = $request->query('proof');

        $id = $payment_id . '.' . $payment_proof;
        $payment = Payment::where('payment_proof', $id)->with('userTicket')->first();
        if (!$payment) {
            return redirect('/');
        }

        return view('ticket.invoice', [
            'payment' => $payment,
            'payment_id' => $payment_id,
            'payment_proof' => $payment_proof
        ]);
    }

    public function printInvoice(Request $request)
    {
        $payment_id = $request->query('payment_id');
        $payment_proof = $request->query('proof');

        $id = $payment_id . '.' . $payment_proof;
        $payment = Payment::where('payment_proof', $id)->with(['userTicket'])->first();
        if (!$payment) {
            return redirect('/');
        }

        return view('ticket.invoice-pdf', [
            'payment' => $payment
        ]);
    }
}

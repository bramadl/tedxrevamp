<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Payment;
use App\Ticket;
use App\UserTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    private function getTicketCode ($ticket, $token) {
        // Tipe Presale + ID
        $hashOne = null;
        $hashTwo = null;
        $hashThree = null;
        $hashFour = null;

        $hashOne = $ticket->type === 'presale-1' ? 'A' : 'B';
        $hashOne .= substr($token, 0, 3);

        $hashTwo = substr($token, 8, 4);

        $hashThree = Auth::user()->role === 'user' ? 'A' : 'X';
        $hashThree .= substr($token, 10, 3);
        
        $hashFour = substr($token, 4, 4);
        
        return $hashOne . ' ' . $hashTwo . ' ' . $hashThree . ' ' . $hashFour; 
    }
    
    public function getCurrentTicketByDate($date)
    {
        $presaleOneStartDate = date('Y-m-d', strtotime('2021-05-09'));
        $presaleOneEndDate = date('Y-m-d', strtotime('2021-05-17'));
        $presaleTwoStartDate = date('Y-m-d', strtotime('2021-05-18'));
        $presaleTwoEndDate = date('Y-m-d', strtotime('2021-05-24'));

        if (
            (date('Y-m-d', strtotime($date . " +1 day")) >= $presaleOneStartDate) &&
            (date('Y-m-d', strtotime($date . " +1 day")) <= $presaleOneEndDate)
        ) {
            return 'presale-1';
        } else if (
            (date('Y-m-d', strtotime($date . " +1 day")) >= $presaleTwoStartDate) &&
            (date('Y-m-d', strtotime($date . " +1 day")) <= $presaleTwoEndDate)
        ) {
            return 'presale-2';
        } else {
            return null;
        }
    }
    
    public function payment(Request $request)
    {
        if (!Auth::check()) { redirect('/'); }

        $userId = Auth::id();
        $userHasPayment = Payment::find($userId);
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

        if (!$user->street_address) {
            return redirect()->route('member.profile')->with('warning', 'Mohon isi alamat terlebih dahulu.');
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

        return view('ticket.invoice', [
            'payment' => $payment
        ]);
    }
}

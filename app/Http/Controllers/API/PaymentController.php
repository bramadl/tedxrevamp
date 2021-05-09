<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceNotificationMail;
use App\Payment;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['userTicket', 'user', 'ticket'])->get();
        return response()->json([
            'payments' => $payments
        ]);
    }
    
    public function verify(Request $request)
    {
        $paymentId = $request->query('payment_id');
        $paymentStatus = $request->query('status');

        $payment = Payment::find($paymentId);
        $payment->payment_status = $paymentStatus;
        $payment->save();

        $ticket = Ticket::find($payment->ticket_id);
        $ticket->stock = $ticket->stock - 1;
        $ticket->save();
        
        Mail::to(Auth::user()->email_address)->send(new InvoiceNotificationMail(Auth::user(), $payment));
        
        return response()->json([
            'success' => true,
            'payment' => $payment
        ]);
    }
}

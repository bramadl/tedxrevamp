<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceNotificationMail;
use App\Mail\PaymentNotificationMail;
use App\Mail\VerifyMail;
use App\Payment;
use App\Providers\PaymentConfirmed;
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

        $user = $payment->user;
        
        return response()->json([
            'success' => true,
            'payment' => $payment,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }
}

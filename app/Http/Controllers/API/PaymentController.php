<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;

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
        
        return response()->json([
            'success' => true,
            'payment' => $payment
        ]);
    }
}

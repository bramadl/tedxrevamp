<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Payment;
use App\UserTicket;
use Illuminate\Http\Request;

class UserTicketController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['user', 'ticket', 'userTicket'])
                            ->get();

        return response()->json([
            'payments' => $payments
        ]);
    }
}

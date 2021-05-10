<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Payment;
use App\RefreshToken;
use App\User;
use App\UserTicket;
use Illuminate\Http\Request;

class RefreshTokenController extends Controller
{
    public function index()
    {
        $refreshTokens = RefreshToken::with(['userTickets'])->get();

        return response()->json([
            'success' => true,
            'refreshTokens' => $refreshTokens
        ]);
    }

    public function verify(Request $request)
    {
        $status = $request->query('status');
        
        $userTicketId = $request->query('user_ticket_id');
        $userTicket = UserTicket::find($userTicketId);
        $payment = Payment::with('user', 'ticket')
                            ->where('id', $userTicket->payment_id)
                            ->first();

        if ($status === 'confirmed') {
            $userTicket->refresh_token = 0;
            $userTicket->save();
        }

        return response()->json([
            'success' => true,
            'userTicket' => $userTicket,
            'payment' => $payment
        ]);
    }
}

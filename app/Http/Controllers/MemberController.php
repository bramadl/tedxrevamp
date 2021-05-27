<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefreshTokenRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Payment;
use App\RefreshToken;
use App\User;
use App\UserTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function profile()
    {
        return view('member.profile');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $validated = $request->validated();
        $user = User::find(Auth::id());
        $password = $validated['password'];

        if ($password) {
            $user->password = Hash::make($validated['password']);
        }

        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'];
        $user->email_address = $validated['email_address'];
        $user->phone_number = $validated['phone_number'];
        $user->street_address = $validated['street_address'];
        $user->save();
        
        return redirect()
                ->route('member.dashboard')
                ->with('success', 'Akun berhasil diperbaharui!');
    }

    public function token()
    {
        $userTicket = UserTicket::with('payment')
                                ->whereHas('payment', function ($query) {
                                    $query->where('user_id', Auth::id());
                                })
                                ->first();
        if (!$userTicket) {
            return redirect()
                    ->route('member.ticket')
                    ->with('warning', 'Kamu belum melakukan pembelian tiket.');
        }

        $refreshToken = RefreshToken::where('user_ticket_id', $userTicket->id)->first();
        if ($refreshToken) {
            if (!$userTicket->refresh_token) {
                return redirect()
                    ->back()
                    ->with('warning', 'Permintaan token hanya bisa dilakukan sekali.');
            } else {
                return redirect()
                    ->back()
                    ->with('warning', 'Kamu telah membuat permintaan token. Silahkan menunggu.');
            }
        }
        
        return view('member.token');
    }

    public function refreshToken(RefreshTokenRequest $request)
    {
        $validated = $request->validated();
        $userTicket = UserTicket::with('payment')
                        ->whereHas('payment', function ($query) {
                            $query->where('user_id', Auth::id());
                        })
                        ->first();
        
        if (!$userTicket) {
            return redirect()
                    ->back()
                    ->with('info', 'Kamu belum melakukan pembelian tiket.');
        }

        if (
            $userTicket->token !== $validated['token'] &&
            $userTicket !== $validated['code']
        ) {
            return redirect()
                    ->back()
                    ->with('error', 'Token dan Kode tiket tidak ditemukan.');
        }

        $refreshToken = RefreshToken::where('user_ticket_id', $userTicket->id)->first();
        if ($refreshToken) {
            if ($userTicket->refresh_token) {
                return redirect()
                    ->back()
                    ->with('warning', 'Permintaan token hanya bisa dilakukan sekali.');
            } else {
                return redirect()
                    ->back()
                    ->with('warning', 'Kamu telah membuat permintaan token. Silahkan menunggu.');
            }
        }
        
        RefreshToken::create([
            'user_ticket_id' => $userTicket->id,
            'reason' => $validated['reason']
        ]);

        return redirect()
                ->route('member.ticket')
                ->with('info', 'Permintaan berhasil diproses. Silahkan menunggu.');
    }

    public function ticket()
    {
        $ticketUser = Payment::with(['userTicket', 'user', 'ticket'])
                        ->where('user_id', Auth::id())
                        ->first();
                        
        return view('member.ticket', [
            'ticketUser' => $ticketUser
        ]);
    }

    public function livestream(Request $request)
    {
        if (Auth::user()->role !== 'user') {
            return "Selamat datang di livestream";
        }
        
        $payment = Payment::where('user_id', Auth::id())
                            ->with('userTicket')
                            ->first();
        if (!$payment) {
            return redirect()
                    ->route('member.dashboard')
                    ->with('warning', 'Kamu belum memiliki ticket.');
        }

        $userTicket = UserTicket::where('payment_id', $payment->id)
                                ->first();

        if ($userTicket->refresh_token && !$request->session()->has('_token_ticket')) {
            return redirect()
                ->route('member.dashboard')
                ->with('warning', 'Kamu telah menggunakan token tiket.');
        }

        $request->session()->put('_token_ticket', $userTicket->code);
        $userTicket->refresh_token = 1;
        $userTicket->save();

        return view('member.livestream');
    }
}

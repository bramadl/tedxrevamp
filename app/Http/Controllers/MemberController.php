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
                ->route('member.profile')
                ->with('success', 'Akun berhasil diperbaharui!');
    }

    public function token()
    {
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

        $refreshToken = RefreshToken::where('payment_id', $userTicket->payment->id)->first();
        if ($refreshToken) {
            return redirect()
                    ->back()
                    ->with('warning', 'Kamu telah membuat permintaan token. Silahkan menunggu.');
        }
        
        RefreshToken::create([
            'payment_id' => $userTicket->payment->id,
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
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Payment;
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

    public function ticket()
    {
        $ticketUser = UserTicket::with('payment')
                        ->whereHas('payment', function ($query) {
                            $query->where('user_id', Auth::id());
                        })
                        ->first();

        return view('member.ticket', [
            'ticketUser' => $ticketUser
        ]);
    }
}

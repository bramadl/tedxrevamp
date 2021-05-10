<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterTeamRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Mail\VerifyMail;
use App\User;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function registerAudience()
    {
        return view('auth.register.index');
    }

    public function registerAudiencePost(RegisterUserRequest $request)
    {
        $validated = $request->validated();
        
        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email_address' => $validated['email_address'],
            'password' => Hash::make($validated['password']),
            'phone_number' => $validated['phone_number'],
            'role' => 'user'
        ];

        $user = User::create($data);
        if (!$user) {
            redirect()
                ->back()
                ->with('status', 'Mohon maaf terjadi kesalahan, silahkan dicoba beberapa saat lagi.');
        }

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time()),
        ]);

        Mail::to($user->email_address)->queue(new VerifyMail($user));

        $route = '/member/confirm?email=' . $user->email_address . '&token=' . $verifyUser->token;
        return redirect($route);
    }
    
    public function registerCore()
    {
        return view('auth.register.core');
    }

    public function registerCorePost(RegisterTeamRequest $request)
    {
        $validated = $request->validated();

        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email_address' => $validated['email_address'],
            'password' => Hash::make($validated['password']),
            'role' => 'core',
            'division' => $validated['division'],
            'verified' => true
        ];

        $user = User::create($data);
        if (!$user) {
            redirect()
                ->back()
                ->with('status', 'Mohon maaf terjadi kesalahan, silahkan dicoba beberapa saat lagi.');
        }

        return redirect('/member/login')->with('status', 'Akun berhasil terdaftar!');
    }

    public function registerVolunteer()
    {
        return view('auth.register.volunteer');
    }

    public function registerVolunteerPost(RegisterTeamRequest $request)
    {
        $validated = $request->validated();

        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email_address' => $validated['email_address'],
            'password' => Hash::make($validated['password']),
            'role' => 'volunteer',
            'division' => $validated['division'],
            'verified' => true
        ];

        $user = User::create($data);
        if (!$user) {
            redirect()
                ->back()
                ->with('status', 'Mohon maaf terjadi kesalahan, silahkan dicoba beberapa saat lagi.');
        }

        return redirect('/member/login')->with('status', 'Akun berhasil terdaftar!');
    }

    public function confirmEmail(Request $request)
    {
        $email_address = $request->query('email');
        $token = $request->query('token');
        
        $user = User::where('email_address', '=', $email_address)
                    ->whereHas('verifyUser', function ($query) use ($token) {
                        $query->where('token', '=', $token);
                    })
                    ->first();
        if (!$user) {
            return redirect('/');
        }

        return view('/auth.confirm-email', [
            'user' => $user
        ]);
    }

    public function resendConfirmEmail(Request $request)
    {
        if (!Auth::check()) {
            return redirect('');
        }

        $user = User::with('verifyUser')
                        ->where('id', Auth::id())
                        ->first();

        Mail::to($user->email_address)->queue(new VerifyMail($user));

        return view('/auth.confirm-email', [
            'user' => $user
        ]);
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();

        if (!$verifyUser) {
            return redirect('/member/login')->with('warning', 'Mohon maaf email kamu tidak dapat diverifikasi.');
        }

        $user = $verifyUser->user;
        if ($user->verified) {
            $status = 'Email sudah terverifikasi, silahkan login.';
        } else {
            $verifyUser->user->verified = 1;
            $verifyUser->user->save();
            $status = 'Verifikasi email berhasil, silahkan login.';
        }

        return redirect('/member/login')->with('status', $status);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(LoginUserRequest $request) {
        $validated = $request->validated();

        $credentials = [
            'email_address' => $validated['email_address'],
            'password' => $validated['password']
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()
                    ->intended('member/dashboard')
                    ->with('success', 'Selamat datang, ' . $user->first_name . ' ' . $user->last_name . '!');
        } else {
            return redirect()
                    ->back()
                    ->with('error', 'Akun tidak ditemukan.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($address = 'technical.tedxbrawijaya@gmail.com', $name = 'TEDxUniversitasBrawijaya2021')
                ->subject('Verifikasi Akun TEDxUniversitasBrawijaya2021')
                ->view('auth.verify-user');
    }
}

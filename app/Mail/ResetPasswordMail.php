<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($passwordbaru, $nis_nik)
    {
        $this->passwordbaru = $passwordbaru;
        $this->nis_nik = $nis_nik;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = User::where('nis_nik', $this->nis_nik)->first();
        return $this->view('pages.auth.email')
                    ->subject('Reset Password NIS/NIK ' . $this->nis_nik)
                    ->with([
                        'passwordbaru' => $this->passwordbaru,
                        'user' => $user,
                    ]);
    }
}

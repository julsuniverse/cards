<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\App;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * @return void
     */
    public function __construct(User $user)
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
        if (App::getLocale() == 'en') {
            return $this->view('emails.en.registration')->with('user', $this->user);
        } else {
            return $this->view('emails.ru.registration')->with('user', $this->user);
        }
    }
}

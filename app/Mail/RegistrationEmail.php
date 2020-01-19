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

    /** @var User $user */
    public $user;

    /** @var string $password */
    public $password;

    public $from;

    /**
     * RegistrationEmail constructor.
     * @param User $user
     * @param string $password
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
        $this->from = env('ADMIN_EMAIL');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (App::getLocale() == 'en') {
            return $this->markdown('emails.en.registration')->with(['user' => $this->user, 'password' => $this->password]);
        } else {
            return $this->markdown('emails.ru.registration')->with(['user' => $this->user, 'password' => $this->password]);
        }
    }
}

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

    /**
     * RegistrationEmail constructor.
     * @param User $user
     * @param string $password
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (App::getLocale() == 'en') {
            return $this->subject('Thank you for registration!')->view('emails.en.registration')->with(['user' => $this->user, 'password' => $this->password]);
        } else {
            return $this->subject('Спасибо за регистрацию')->view('emails.ru.registration')->with(['user' => $this->user, 'password' => $this->password])->from('info@tarot-light.space', 'Свет Таро');;
        }
    }
}

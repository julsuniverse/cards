<?php


namespace App\Mail;


use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class OrderAcceptedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var User $user */
    public $user;

    /**
     * RegistrationEmail constructor.
     * @param User $user
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
            return $this->view('emails.en.order-accepted')->with(['user' => $this->user]);
        } else {
            return $this->view('emails.ru.order-accepted')->with(['user' => $this->user]);
        }
    }
}

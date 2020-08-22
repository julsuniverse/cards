<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class OrderReceivedForRegisteredUser extends Mailable
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
            return $this->subject('Thank you for registration!')->view('emails.en.order-received')->with(['user' => $this->user]);
        } else {
            return $this->subject(' Ваш заказ получен')->view('emails.ru.order-received')->with(['user' => $this->user]) ->from('info@tarot-light.space', 'Свет Таро');
        }
    }
}

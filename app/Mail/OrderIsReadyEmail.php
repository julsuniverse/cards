<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderIsReadyEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $appName;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->locale = $user->locale ?? 'en';
        $this->appName = config('app.name');
    }

    /**
     * @return $this
     */
    public function build()
    {
        if ($this->locale == 'en') {
            return $this
                ->subject('Your order is ready! -'  . $this->appName)
                ->view('emails.en.order-is-ready');
        } else {
            return $this
                ->subject('Ваш заказ готов! - ' . $this->appName)
                ->view('emails.ru.order-is-ready');
        }
    }
}

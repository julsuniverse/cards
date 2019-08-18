<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderIsReadyEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $appName;

    /**
     * @param string $locale
     */
    public function __construct(string $locale)
    {
        $this->locale = $locale;
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
                ->markdown('emails.en.order-is-ready');
        } else {
            return $this
                ->subject('Ваш заказ готов! - ' . $this->appName)
                ->markdown('emails.ru.order-is-ready');
        }
    }
}

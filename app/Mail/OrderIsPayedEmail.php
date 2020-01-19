<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderIsPayedEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $appName;
    /**
     * @var Order
     */
    private $order;

    /**
     * @param string $locale
     * @param Order $order
     */
    public function __construct(string $locale, Order $order)
    {
        $this->locale = $locale;
        $this->appName = config('app.name');
        $this->order = $order;
    }

    /**
     * @return $this
     */
    public function build()
    {
        if ($this->locale == 'en') {
            return $this
                ->subject('Your order is ready! -'  . $this->appName)
                ->view('emails.en.order-is-payed')
                ->with('order', $this->order);
        } else {
            return $this
                ->subject('Ваш заказ готов! - ' . $this->appName)
                ->view('emails.ru.order-is-payed')
                ->with('order', $this->order);
        }
    }
}

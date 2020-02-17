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
    private $user;

    /**
     * @param string $locale
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->user = $order->user;
        $this->locale =$user->locale ?? 'en';
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
                ->view('emails.en.order-is-payed')
                ->with(['order' => $this->order, 'user' => $this->user]);
        } else {
            return $this
                ->subject('Ваш заказ готов! - ' . $this->appName)
                ->view('emails.ru.order-is-payed')
                ->with(['order' => $this->order, 'user' => $this->user]);
        }
    }
}

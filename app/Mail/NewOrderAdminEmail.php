<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderAdminEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $from;
    /**
     * @var Order
     */
    private $order;

    public function __construct(Order $order)
    {
        $this->from = env('ADMIN_EMAIL');
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Новый заказ!')
            ->markdown('emails.ru.new-order')
            ->with('order', $this->order);
    }
}
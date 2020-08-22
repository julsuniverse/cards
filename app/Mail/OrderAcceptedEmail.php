<?php


namespace App\Mail;


use App\Models\Order;
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
     * @var Order
     */
    private $order;

    /**
     * RegistrationEmail constructor.
     * @param User $user
     * @param Order $order
     */
    public function __construct(User $user, Order $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (App::getLocale() == 'en') {
            return $this->subject('You order is accepted!')
                ->view('emails.en.order-accepted')
                ->with(['user' => $this->user, 'price' => $this->order->price]);
        } else {
            return $this->subject('Ваш заказ принят')
                ->view('emails.ru.order-accepted')
                ->with(['user' => $this->user, 'price' => $this->order->price])
                ->from('info@tarot-light.space', 'Свет Таро');
        }
    }
}

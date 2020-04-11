<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 * @mixin \Eloquent
 */
class Order extends Model
{
    const STATUS_NEW = 'new';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_PAYED = 'payed';
    const STATUS_PROCESSING = 'processing';
    const STATUS_READY = 'ready';
    const STATUS_NOT_PAYED = 'not payed';

    const CARDS_TAROT = 'tarot';
    const CARDS_LENORMAND = 'lenormand';

    /** @inheritdoc */
    protected $guarded = [];

    public $statuses = [
        'new',
        'accepted',
        'payed',
        'processing',
        'ready',
        'not payed'
    ];

    public $status_class = [
        'new' => 'badge-danger',
        'accepted' => 'badge-warning',
        'processing' => 'badge-secondary',
        'ready' => 'badge-success',
        'payed' => 'badge-primary',
        'not payed' => 'badge-dark'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}

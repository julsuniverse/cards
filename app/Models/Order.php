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
    const STATUS_PROCESSING = 'processing';
    const STATUS_READY_FOR_PAYMENT = 'ready';
    const STATUS_PAYED = 'payed';
    const STATUS_VIEWED = 'viewed';

    /** @inheritdoc */
    protected $guarded = [];

    public $statuses = [
        'new',
        'processing',
        'ready',
        'payed',
        'viewed',
    ];

    public $status_class = [
        'new' => 'badge-danger',
        'processing' => 'badge-secondary',
        'ready' => 'badge-warning',
        'payed' => 'badge-primary',
        'viewed' => 'badge-success',
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
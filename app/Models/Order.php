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
    const STATUS_WAITING_FOR_PAYMENT = 'waiting';
    const STATUS_READY = 'ready';

    /** @inheritdoc */
    protected $guarded = [];
}
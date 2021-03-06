<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Layout
 * @package App\Models
 * @mixin \Eloquent
 */
class Layout extends Model
{
    /** @inheritdoc */
    protected $guarded = [];

    /** @inheritdoc */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Theme
 * @package App\Models
 * @mixin \Eloquent
 */
class Theme extends Model
{
    /** @inheritdoc */
    protected $guarded = [];

    /** @inheritdoc */
    public $timestamps = false;
}
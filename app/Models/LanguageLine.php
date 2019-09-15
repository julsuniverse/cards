<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageLine extends Model
{
    protected $guarded = [];

    public function getTextEnAttribute()
    {
        return json_decode($this->text)->en;
    }

    public function getTextRuAttribute()
    {
        return json_decode($this->text)->ru;
    }
}
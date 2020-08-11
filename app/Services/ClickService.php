<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Click;
use Carbon\Carbon;

class ClickService
{
    public function save()
    {
        $todayClicks = Click::whereDate('created_at', Carbon::today())->get()->count();
        $click = new Click();
        $click->click = $todayClicks + 1;
        $click->save();
    }
}

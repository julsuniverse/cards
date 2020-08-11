<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\ClickService;
use Illuminate\Http\Response;

class ClickController
{
    public function saveClick(ClickService $clickService)
    {
        $clickService->save();
        return Response::HTTP_OK;
    }
}

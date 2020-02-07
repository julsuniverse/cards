<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserInfoRequest;
use App\Http\Requests\User\UserPasswordRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders;

        return view('user.cabinet.index')->with(compact('user', 'orders'));
    }

    public function showAnswer(Order $order)
    {
        $user = Auth::user();
        if ($order->user->id != $user->id) {
            abort(403);
        }

        return view('user.cabinet.show-answer')->with(compact('user', 'order'));
    }

    public function edit(UserInfoRequest $request, User $user)
    {
        try {
            $user->update([
                'name' => $request->name,
                'dob' => $request->date,
                'email' => $request->email,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'error' => __('messages.error.simple'),
                'tab' => 'info'
            ]);
        }
        return redirect()->back()
            ->with([
                'success' => __('messages.success.save-password'),
                'tab' => 'info'
            ]);
    }

    public function changePassword(UserPasswordRequest $request, User $user)
    {
        try {
            $user->update([
                'password' => $request->password ? Hash::make($request->password) : Auth::user()->getAuthPassword()
            ]);
        } catch (\Exception $e) {
            return back()
                ->with([
                    'error' => __('messages.error.simple'),
                    'tab' => 'password'
                ]);
        }
        return redirect()->back()
            ->with([
                'success' => __('messages.success.save-password'),
                'tab' => 'password'
            ]);
    }
}

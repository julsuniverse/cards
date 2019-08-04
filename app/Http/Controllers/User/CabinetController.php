<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserInfoRequest;
use App\Http\Requests\User\UserPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('orders')->first();
        return view('user.cabinet.index')->with(compact('user'));
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
            return redirect()->back()->with('error', __('messages.error.simple'));
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
            return redirect()->back()->with('error', __('messages.error.simple'));
        }
        return redirect()->back()
            ->with([
                'success' => __('messages.success.save-password'),
                'tab' => 'password'
            ]);
    }
}
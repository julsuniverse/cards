<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserInfoRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('orders')->first();
        return view('user.cabinet.index')->with(compact('user'));
    }

    public function edit(UserInfoRequest $request, User $user)
    {
        dd($request->input());
        try {
            $user->update([
                'name' => $request->name,
                'dob' => $request->date,
                'email' => $request->email,
                'password' => $request->password ? $request->password : Auth::user()->getAuthPassword()
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
        return redirect()->back()->with('success', 'Your personal information was updated');
    }
}
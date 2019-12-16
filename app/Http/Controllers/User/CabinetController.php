<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserInfoRequest;
use App\Http\Requests\User\UserPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use WayForPay\SDK\Collection\ProductCollection;
use WayForPay\SDK\Credential\AccountSecretTestCredential;
use WayForPay\SDK\Domain\Client;
use WayForPay\SDK\Domain\Product;
use WayForPay\SDK\Response\RufundResponse;
use WayForPay\SDK\Wizard\PurchaseWizard;

class CabinetController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = $user->orders;

        $credential = new AccountSecretTestCredential();
        $purchaseForm = PurchaseWizard::get($credential)
            ->setOrderReference(sha1(microtime(true)))
            ->setAmount(1)
            ->setCurrency('UAH')
            ->setOrderDate(new \DateTime())
            ->setMerchantDomainName('https://cards.loc')
            ->setClient(new Client(
                'John',
                'Dou',
                'john.dou@gmail.com',
                '+12025550152',
                'USA'
            ))
            ->setProducts(new ProductCollection(array(
                new Product('test', 1, 1)
            )))
            //->setReturnUrl('http://ru.cards.loc/cabinet')
            ->setServiceUrl('http://ru.cards.loc/cabinet/check')
            ->getForm()
            ->getAsString();;

        return view('user.cabinet.index')->with(compact('user', 'orders', 'purchaseForm'));
    }

    public function check(Request $request)
    {
        Log::info('PAYMENT: ', $request->all());
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
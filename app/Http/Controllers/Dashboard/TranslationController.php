<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LanguageLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class TranslationController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translations = LanguageLine::orderBy('group')->orderBy('key')->get();
        return view('dashboard.translation.index')->with(compact('translations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param LanguageLine $translation
     * @return \Illuminate\Http\Response
     */
    public function edit(LanguageLine $translation)
    {
        return view('dashboard.translation.edit')->with(compact('translation'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param LanguageLine $translation
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, LanguageLine $translation)
    {
        try {
            $text_en = explode('<p data-f-id="pbf"', $request->text_en)[0];
            $text_ru = explode('<p data-f-id="pbf"', $request->text_ru)[0];
            $text = [
                'en' => $text_en,
                'ru' => $text_ru,
            ];

            $translation->update([
                'text' => json_encode($text)
            ]);

            Artisan::call('cache:clear');
            Artisan::call('view:clear');
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.translation.edit', [$translation]))->with('success', 'Перевод был обновлен!');
    }
}
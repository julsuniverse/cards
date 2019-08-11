<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::paginate(20);
        return view('dashboard.theme.index')->with(compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.theme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Theme::create($request->input());
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('theme.index'))->with('success', 'Тема была добавлена!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('dashboard.theme.edit')->with(compact('theme'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Theme $theme
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Theme $theme)
    {
        try {
            $theme->update($request->input());
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('theme.edit', [$theme]))->with('success', 'Тема была обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Theme $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        Theme::destroy($theme->id);
        return redirect(route('theme.index'))->with('success', 'Тема была удалена!');
    }
}
<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Layout;
use App\Models\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::paginate(20);
        return view('dashboard.layout.index')->with(compact('layouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Theme::orderBy('name_ru')->get();
        return view('dashboard.layout.create')->with(compact('themes'));
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
            Layout::create($request->input());
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('layout.index'))->with('success', 'Расклад был добавлен!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Layout $layout
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        $themes = Theme::orderBy('name_ru')->get();
        return view('dashboard.layout.edit')->with(compact('layout', 'themes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Layout $layout
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Layout $layout)
    {
        try {
            $layout->update($request->input());
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('layout.edit', [$layout]))->with('success', 'Расклад был обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        Layout::destroy($layout->id);
        return redirect(route('layout.index'))->with('success', 'Расклад был удален!');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Layout;
use App\Models\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::paginate(20);
        return view('dashboard.layout.index')->with(compact('layouts'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Theme::orderBy('name_ru')->get();
        return view('dashboard.layout.create')->with(compact('themes'));
    }

    /**
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
        return redirect(route('dashboard.layout.index'))->with('success', 'Расклад был добавлен!');
    }

    /**
     * @param Layout $layout
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        $themes = Theme::orderBy('name_ru')->get();
        return view('dashboard.layout.edit')->with(compact('layout', 'themes'));

    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @param Layout $layout
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Layout $layout)
    {
        try {
            $text_ru = explode('<p data-f-id="pbf"', $request->text_ru)[0];
            $text = explode('<p data-f-id="pbf"', $request->text)[0];
            $layout->update(array_merge($request->input(), ['text_ru' => $text_ru], ['text' => $text]));
        } catch (\DomainException $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect(route('dashboard.layout.edit', [$layout]))->with('success', 'Расклад был обновлен!');
    }

    /**
     * @param Layout $layout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        Layout::destroy($layout->id);
        return redirect(route('dashboard.layout.index'))->with('success', 'Расклад был удален!');
    }
}

<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
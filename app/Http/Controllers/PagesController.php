<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function about()
    {

    	return view('pages.about');
    }

    public function store(Request $request)
    {
    	return $request->all();
    }
    public function welcome()
    {
        return view('welcome');
    }
}

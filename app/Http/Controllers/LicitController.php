<?php

namespace App\Http\Controllers;

use Request;


class LicitController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');


    }
	public function show($user)
	{

		$licit=Licit::where( $user, $Makerid );

		return view(' licit.show ', compact('$licit'));


	}
    public function add()
    {
    	return view('licit.create');
    }

    public function store(Request $request)
    {

    	$licit = new Licit;
        $licit->name = $request->name;
        $licit->body = $request->body;
        $licit->Makerid = $request -> Makerid;
        $licit->Caduca = $request -> Caduca;
        $licit->save();

    	//return redirect('welcome');
        return $request->all();
    }

}

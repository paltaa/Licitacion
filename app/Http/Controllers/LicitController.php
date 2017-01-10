<?php

namespace App\Http\Controllers;

use Auth;
use App\Licit;
use Illuminate\Http\Request;
//use Request;
class LicitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Licit $userid)
	{

		//$licit=Licit::where( $userid,'=', $makerid );

		return $licit;
        return view(' licit.show ', compact('$licit'));
	}

    public function show()
    {
        $licit = Licit::where('makerid', Auth::id())->get();
        return $licit;  
        return view('licit.index', compact($licit));

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
        $licit->makerid = Auth::id();
        $licit->caduca = $request -> caduca;
        $licit->rubro = $request -> rubro;
        $licit->save();
        return "<script> alert('guardada exitosamente')</script>".redirect('home');

        
    }

}

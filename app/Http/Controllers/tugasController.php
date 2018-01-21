<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugasmodel;	
class tugasController extends Controller
{
    public function template ()
    {
    	return view('layout.master');
    }
    public function template2 ()
    {
    	return view('layout.galeri');
    }
     public function template3()
    {
    $a=tugasmodel::all();
    return view('table', compact('a'));
    }
    public function template4 ()
    {
    	return view('layout.paragraf');
    }
     public function template6()
    {
    $a=tugasmodel::all();
    return view('table1', compact('a'));
    }
     public function template5 ()
    {
    	return view('layout.custom1');
    }

}

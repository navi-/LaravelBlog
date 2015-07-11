<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPageCntlr extends Controller
{
    //

    public function about() {
   	
    	#return view('pages.about')-> with('name', $name); # Pass single variable 

    	$name = 'Narayan Vyas';
    	/*return view('pages.about') -> with ([
    		'first' => 'Narayan',
    		'last' => 'Vyas'
    		]); #pass values to views in an array */

    	/* Pass parameters using array
    	$data = [];

    	$data['first'] = 'Narayan';
    	$data['last'] = 'Vyas';
		return view('pages.about', $data);*/

		/* pass parameters using compact function*/
		$first = 'Na1';
		$last = 'Vy2';
		#return view('pages.about', compact('first', 'last'));

		$people = ['Aquafina','Kinley', 'Thesing'];

		return view('pages.about', compact('people'));
    }

    public function contact() {
    	return view('pages.contact');
    }
}

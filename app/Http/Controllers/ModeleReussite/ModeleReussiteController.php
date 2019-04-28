<?php

namespace App\Http\Controllers\ModeleReussite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;
use Session;

class ModeleReussiteController extends Controller
{
	
	
	public function modele_reussite()
	{
		return view('ModeleReussite.modele_reussite');
	}
	
}

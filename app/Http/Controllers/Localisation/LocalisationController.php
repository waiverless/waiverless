<?php

namespace App\Http\Controllers\Localisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;
use Session;

class LocalisationController extends Controller
{
	public function localisation()
	{
		$Targets = DB::table('target')->join('commune', 'target.living_town', '=', 'commune.id')->select('target.id','target.first_name','target.last_name','commune.latitude','commune.longitude')->get()->toArray();
		$Volunteers = DB::table('volunteer')->join('commune', 'volunteer.living_town', '=', 'commune.id')->select('volunteer.id','volunteer.first_name','volunteer.last_name','commune.latitude','commune.longitude')->get()->toArray();
		
		
		return view('Localisation.localisation',['Targets' => $Targets,'Volunteers' => $Volunteers]);
	}
	
	public function formation()
	{
		return view('Formation.formation');
	}
	
}

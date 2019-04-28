<?php

namespace App\Http\Controllers\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;
use Session;

class VolunteerController extends Controller
{
	//show the form for adding a Volunteer
	public function Volunteer()
	{
		
		$Collectivites = DB::table('commune')->where('valide', 1)->get()->toArray();
		$NiveauEtudes = DB::table('study_level')->where('valide', 1)->get()->toArray();
		$Skills = DB::table('skill')->where('valide', 1)->get()->toArray();
		return view('Volunteer.Volunteer',['Collectivites' => $Collectivites,'NiveauEtudes' => $NiveauEtudes,'Skills' => $Skills]);
	}
	
	//store data in database
	public function storeVolunteer(Request $request)
	{
		
		try{
			$Volunteer['first_name'] = $request->first_name;
			$Volunteer['last_name'] = $request->last_name;
			$Volunteer['birth_date'] = $request->birth_date;
			$Volunteer['birth_town'] = $request->birth_town;
			$Volunteer['living_town'] = $request->living_town;
			$Volunteer['phone_number'] = $request->phone_number;
			$Volunteer['study_level'] = $request->study_level;
			$Volunteer['skills'] = implode("-",$request->skills);
			$Volunteer['job'] = $request->job;
			$Volunteer['comment'] = $request->comment;
			$Volunteer['created_at'] = date('Y-m-d');
			if(!empty($Volunteer)) 
			{
				DB::table('Volunteer')->insert($Volunteer);
			}
			Session::put('alert', array('category' => 1,'message' => "messages.success_operation"));
			return back();
		}catch(Exception $e)
		{
			Session::put('alert', array('category' => 2,'message' => "messages.unsuccess_operation"));
			return back();
		}
	}
	
	
	
}

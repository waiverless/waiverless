<?php

namespace App\Http\Controllers\Target;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;
use Session;

class TargetController extends Controller
{
	public function target()
	{
		//show the form for adding a young girl who waiver school
		$Collectivites = DB::table('commune')->where('valide', 1)->get();
		$NiveauEtudes = DB::table('niveau_etude')->where('valide', 1)->get()->toArray();
		$Classes = DB::table('classe')->where('valide', 1)->get()->toArray();
		$MotifAbandons = DB::table('motif_abandon')->where('valide', 1)->get()->toArray();
		return view('Target.target',['Collectivites' => $Collectivites,'NiveauEtudes' => $NiveauEtudes,'Classes' => $Classes,'MotifAbandons' => $MotifAbandons]);
	}
	
	public function storeTarget(Request $request)
	{
		//store data in database
		try{
			$Target['first_name'] = $request->first_name;
			$Target['last_name'] = $request->last_name;
			$Target['birth_date'] = $request->birth_date;
			$Target['birth_town'] = $request->birth_town;
			$Target['living_town'] = $request->living_town;
			$Target['phone_number'] = $request->phone_number;
			$Target['study_level'] = $request->study_level;
			$Target['class_level'] = $request->class_level;
			$Target['status'] = $request->status;
			$Target['reason_of_waiver'] = $request->reason_of_waiver;
			$Target['comment'] = $request->comment;
			$Target['created_at'] = date('Y-m-d');
			if(!empty($Target)) 
			{
				DB::table('target')->insert($Target);
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

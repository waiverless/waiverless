<?php

namespace App\Http\Controllers\Documentation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use DB;
use Session;

class DocumentationController extends Controller
{
	
	
	public function formation()
	{
		return view('Documentation.formation');
	}
	
}

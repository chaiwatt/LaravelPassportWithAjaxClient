<?php

namespace App\Http\Controllers\Api;

use App\Model\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function GetPatient(Request $request){
        $patients = Patient::where('hospital_id',$request->id)->get();
        return response()->json($patients); 
    }
}

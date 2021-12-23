<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Token;
use Illuminate\Http\Request;

class doctorApiController extends Controller
{
    public function doctor()
    {
        $alldoctor = Doctor:: all();
        return response()->json([
            'alldoctor'=>$alldoctor,
        ],200
    
    );

    }
    public function DocProfile(Request $request){
        $token= $request->header("Authorization");  
        $check_token=Token::where('token',$token)
         ->first();
    
            $profile=  Doctor:: 
         where('userid',$check_token->userid)
          ->get();
            return response()->json([
                'profile'=>  $profile,
            ],200
        );  

    }
}

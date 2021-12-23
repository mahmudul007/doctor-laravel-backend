<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Token;
use App\Models\cUser;

class reportApicontroller extends Controller
{
    //
    public function report(Request $request)
    {
         $start_date 	= $request->get('start_date', date('Y-m-d time'));
       $end_date	= $request->get('end_date', date('Y-m-d time'));
        $token= $request->header("Authorization");  
        $check_token=Token::where('token',$token)
         ->first();

     	$total =Book::
         where('doctoruserid',$check_token->userid)
        ->where('prescribe', '!=', NULL)  
        ->whereBetween('updated_at' , [ $start_date,$end_date ])
        ->count();
       
        return($total );
        

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;





use Illuminate\Http\Request;

class patientController extends Controller
{
    public function patientList()
    {
        // if(!session()->has('user')){
        //     return redirect()->route('doctorLogin');
        //    }
           
    //  $doc_name=session()->get ('user');



        $patients = DB::table('bookings')
        // ->where('doc_name',$doc_name)
        ->select('bookings.*')
        
        ->where('bookings.prescribe', '=', NULL)
       
        ->get();

        $total=DB::table ('bookings')->count();

       
        
    return[ $patients,$total];
    }
    public function prescribed()
    {
        // if(!session()->has('user')){
        //     return redirect()->route('doctorLogin');
        //    }
           
     $doc_name=session()->get ('user');

        $patient = 
        DB::table('bookings')
        ->where('doc_name',$doc_name)
        ->select('bookings.*')
        ->where('bookings.prescribe', '!=', NULL)
        ->get();
        return $patient;  
    }



  
}

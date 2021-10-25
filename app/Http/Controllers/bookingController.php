<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class bookingController extends Controller
{
     public function edit(Request $request)
    {
        
    $id= $request->id;
    $patient= Booking::where('id',$id)->first();
    return view ('pages.patient.edit')->with('patient',$patient);

    
    }

    public function editSubmit(Request $request){
        $var=Booking::where('id',$request->id)->first();
        $var->username=$request->username;
        $var->gender=$request->gender;
        $var->age=$request->age;
        $var->phone_no=$request->phone_no;
        $var->doc_name=$request->doc_name;
        $var->time=$request->time;
        $var->prescribe=$request->prescribe;
        $var->save(); 
        return redirect()-> route('patientList');       
            }
}

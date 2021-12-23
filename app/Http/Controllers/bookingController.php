<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

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
        ///booking part for anyone book for doctor

            public function booking()
            {
                
                $doctors = DB::table('doctors')
                  ->select('doctors.*')
                  ->get();
             
                return view('pages.patient.booking')->with('doctors',$doctors);
                

            }
            


            public function createSubmit(Request $request){

                $validate = $request->validate([
                    'age'=>'required',
                    'username'=>'required|min:5|max:10',
                        'gender'=>'required',
                        'age'=>'required',
                        'phone_no'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                        'doc_name'=>'required',
                        'booked_for'=>'required',
                        'book_date'=>'required',
                        'time'=>'required'
                    
                   
                ]);

                // $this->validate(
                //     $request,
                //     [
                //         'username'=>'required|min:5|max:10',
                //         'gender'=>'required',
                //         'age'=>'required',
                //         'phone_no'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                //         'doc_name'=>'required',
                //         'booked_for'=>'required',
                //         'book_date'=>'required',
                //         'time'=>'required'
                      
                //     ]);

                $var = new Booking();
                $var->username=$request->username;
                $var->gender=$request->gender;
                $var->age=$request->age;
                $var->phone_no=$request->phone_no;
                $var->doc_name=$request->doc_name;
                $var->book_date=$request->book_date;
                $var->booked_for=$request->booked_for;
                $var->time=$request->time;

                 $var->save();
        
        
                 return redirect()-> route('doctorList');
        
        
            }
}

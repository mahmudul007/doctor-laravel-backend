<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{

    
    public function doctorLogin()
    {
        return view('pages.doctor.login');
    }
    public function loginSubmit(Request $req)
    {
        $var = Doctor::where ('doc_name',$req->doc_name)
              ->where('password',$req->password)
              ->first();
              if($var){
                session()->put('user', $var->doc_name);
                return redirect()->route('patientList');
              }
            
              return redirect('doctorLogin');
    }

    public function doctorLogout(){
        session()->flush();
     return   redirect()->route('doctorLogin');
    }
    public function myprofile(){
        if(!session()->has('user')){
    return redirect()->route('doctorLogin');
   }
        $doc_name=session()->get ('user');
        $doctor=Doctor::where('doc_name',$doc_name)->first();

       return view('pages.doctor.profile')->with('doctor',$doctor)  ;
    }
    
    public function editProfile(Request $request)
    {
        
    $id= $request->id;
    $doctor= Doctor::where('id',$id)->first();
    return view ('pages.doctor.editdoc')->with('doctor',$doctor);  
    }

    public function editSubmit(Request $request){
        $var=Doctor::where('id',$request->id)->first();
        $var->doc_name=$request->doc_name;
        $var->dept=$request->dept;
        $var->img=$request->img;
        $var->password=$request->password;
        $var->description=$request->description;
        $var->available=$request->available;
        $var->save(); 
        return redirect()-> route('myprofile');       
            }

}

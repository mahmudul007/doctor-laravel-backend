<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Token;
use App\Models\cUser;

class bookingApiController extends Controller
{
    public function bookingSubmit(Request $request){

        $var = new Book();
        $var->username=$request->username;
        $var ->doc_name=$request->doc_name;
        $var->doctoruserid=$request->doctoruserid;
        $var->patientName=$request->patientName;
        $var ->available=$request->available;
        $var ->	phone=$request->phone;
        $var ->date=$request->date ;
        $var->save();
        return $var ;


       
    }
    public function getBooked(Request $request){
        
        $token= $request->header("Authorization");  
        $check_token=Token::where('token',$token)
         ->first();
    
            $patientList= Book:: 
         where('doctoruserid',$check_token->userid)
        
            ->where('prescribe', '=', NULL)
            
            ->get();
            return response()->json([
                'patientList'=>  $patientList,
            ],200
        );  
        }
        public function prescribe ($id){
            $prescribe= Book::find($id);

            return response()->json([
                'prescribe'=>  $prescribe,
            ],200);

        }
        public function bookupdate(Request $request,$id){
            $var = Book::find($id);
            $var->prescribe=$request->prescribe;
            $var->update();
            return response()->json([
                'prescribe'=>  'updated successfull',
            ],200);
           
            
            
            
        }
        public function prescribed(Request $request){
        
            $token= $request->header("Authorization");  
            $check_token=Token::where('token',$token)
             ->first();
        
                $patientList= Book:: 
             where('doctoruserid',$check_token->userid)
            
                ->where('prescribe', '!=', NULL)
             
                ->get();
                return response()->json([
                    'patientList'=>  $patientList,
                ],200
            );  
            }


          


        
    }


<?php

namespace App\Http\Controllers;
use App\Models\cUser;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DateTime;



class loginApicontroller extends Controller
{
   

    public function  login(Request $req){
        $error ="User name password not matched";
        
        $user = cUser::where('username',$req->username)->where('password',$req->password)->first();
        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $user->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
          
            return response()->json([
                'token'=>$token,
                'user'=>$user



            ],200
        
        );
            
        }
        
        

    }
    public function noauth()
    {
        return "invalid auth";
    }
   
    
}

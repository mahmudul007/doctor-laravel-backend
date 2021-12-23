<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\cUser;
use Illuminate\Support\Facades\DB;


class APIauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token= $request->header("Authorization");  
        $check_token=Token::where('token',$token)
        ->where('expired_at',NULL)
        ->first();
        $isDoctor=cUser::where('id',$check_token->userid)
             ->where('type','doctor')->first();
             $isUser=cUser::where('id',$check_token->userid)
             ->where('type',NULL)->first();
            if($isDoctor)  
                {            
               return $next($request);
                }
               
      
      
           
        else 
        {
            return response ( "invalid token", 404);
        }
       
    }
}

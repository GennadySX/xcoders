<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{


    public function loginUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
//        /$rememberToken = $request->token;


        if (Auth::guard('member')->attemp(['email'=>$email, 'password'=>$password], $rememberToken)) {
            $msg = array (
                'status' => 'success',
                'message' => 'Login Successful'
            );
        return response()->json($msg);
        } else {
            $msg = array(
                'status' => 'error',
                'message' => 'Login Fail'
            );
            return response()->json($msg);
        }
 }
    //
}

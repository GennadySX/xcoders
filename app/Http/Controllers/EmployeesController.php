<?php

namespace App\Http\Controllers;

use App\RoleUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Users;

class EmployeesController extends Controller
{
    function check() {
        if (!Auth::check()){
            return redirect('/');
        }
    }

    public function del(Request $request)
    {
        check();

        $data = DB::table('users')->where('id', $request->id)->delete();
        if ($data) {
            return back();
        }

    }






    public function run(Request $request)
    {
        if (Auth::user()) {



            $user = DB::table('users')->where('email', $request->email)->first();
            $role = DB::table('role_user')->where('user_id', $user->id)->update([
                'user_id' =>  $user->id,
                'role_id' => $request->role
            ]);

            if ($role) {
                return back();
            }








           // return $user->id;
    }
        }
}

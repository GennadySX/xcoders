<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class UserUpdate extends Controller
{
    public function update(Request $request)
    {

        $user = Auth::user();

      if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalName();
            Image::make($avatar)->crop(300,300)->save(public_path('/uploads/users/'.$filename));
          $user->avatar= $filename;
       }
        $user->name= $request->name;
        $user->surname= $request->lastname;
        $user->middle_name= $request->middle_name;
        $user->phone= $request->phone;
        $user->email= $request->email;
        if($request->gender)  $user->gender= $request->gender;
        $user->birth_date= $request->birth;

        $user->save();
        return back();



    }



}

<?php

namespace App\Http\Controllers;

use App\MyTariff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TariffCreate extends Controller
{
    function check() {
        if (!Auth::check()){
            return redirect('/');
        }
    }

    public function del(Request $request)
    {
        check();

        $data = DB::table('tariff')->where('id', $request->id)->delete();
        if ($data) {
            return redirect('/dashboard/tariff');
        }

    }

    public function connect(Request $request)
    {
        check();

        $user_tariff = MyTariff::where('user_id',Auth::user()->getAuthIdentifier())->update(['tariff_id' => intval($request->id)]);

     if ($user_tariff) {
         return redirect('/dashboard/my_tariff');
     }



    }




    public function run(Request $request)
    {
      if (Auth::user()) {


        $data = DB::table('tariff')->insert([
           'name' => $request->name,
           'cost' => $request->cost,
           'desc' => $request->desc,
           'from_public' => date_create()->format('Y-m-d H:i:s'),
           'to_public' => date_create()->format('Y-m-d H:i:s')
       ]);
     if ($data) {
           return redirect('/dashboard/tariff');
       }
      } else {
          return redirect('/');
      }
    }




}

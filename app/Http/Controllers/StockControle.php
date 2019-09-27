<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockControle extends Controller
{
    public function del(Request $request)
    {
        check();

        $data = DB::table('stock')->where('id', $request->id)->delete();
        if ($data) {
            return back();
        }

    }

    public function run(Request $request)
    {
        if (Auth::user()) {


            $data = DB::table('stock')->insert([
                'name' => $request->name,
                'desc' => $request->desc,
                'cost' => $request->cost,
                'src' => "asdasdasd.jpg"
            ]);
            if ($data) {
                return back();
            }
        } else {
            return redirect('/');
        }
    }
}

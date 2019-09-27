<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopControle extends Controller
{
    public function del(Request $request)
    {
        check();

        $data = DB::table('shops')->where('id', $request->id)->delete();
        if ($data) {
            return back();
        }

    }
}

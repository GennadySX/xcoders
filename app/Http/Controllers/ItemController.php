<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ItemController extends Controller
{
    //
    public function index() {
        $data =  Item::with('user', 'region')->paginate(5);
        if (count($data) > 0 ){
            return response()->json($data, 200,[],JSON_UNESCAPED_SLASHES);
        } else return response()->json('item not found');

    }
    public function byId($id, Item $item)
    {
        $it = $item::where('id', $id)->first();
        if (isset($it) && isset($it->id)) return response()->json($it,200,[],JSON_UNESCAPED_SLASHES);
        return response()->json('item not found');
    }
    public function create(Request $request, Item $item)
    {
        if ($request) {
            $item->name = $request->name;
            $item->user_id = Auth::id();
            $item->region_id = $request->region_id;
            if ($request->hasFile('path')) {
                $bkg = $request->file('path');
                $filename = time().'.'.$bkg->getClientOriginalName();
                Image::make($bkg)->save(public_path('/uploads/item/'.$filename));
                $item->img = $filename;
            }
            $item->goal = $request->goal;
            $item->achieve_cost = $request->achieve_cost;
            $item->deadline = $request->deadline;
            if ($item->save()) return response()->json(['id'=>$item->id ], 200);
            return response()->json('error create');
        } else return response()->json('error request data');
    }
    public function update(Request $req,Item $item)
    {
        if (Auth::user()->roles('admin'))
            if($req) {
                $data = array([
                    'name' => $req->name,
                    'region_id' => $req->region_id,
                    'goal' => $req->goal,
                    'deadline' => $req->deadline,
                    'achieve_cost' => $req->achieve_cost
                ]);
                if ($req->hasFile('path'))
                    $bkg = $req->file('path');
                    $filename = time().'.'.$bkg->getClientOriginalName();
                    Image::make($bkg)->save(public_path('/uploads/item/'.$filename));
                    $data['img'] = $filename;
                $item::where('id', $req->id)->update($data);
                return response()->json('updated');
            }
        return response()->json('failed data');
    }
    public function destroy($id, Item $item)
    {
        if ($item::destroy($id)) return response()->json('deleted');
        return response()->json('oops item can`t delete1');
    }
}

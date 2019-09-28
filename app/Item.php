<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //


    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }


    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');

    }

}

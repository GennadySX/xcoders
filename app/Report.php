<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{












    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }




}

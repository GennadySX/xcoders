<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostBonus extends Model
{




    public function card()
    {
        return $this->belongsTo(CostBonus::class, 'card_id');
    }



}

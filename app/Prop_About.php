<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prop_About extends Model
{
    //
    protected $table = "prop_abouts";













    public function about()
    {
        return $this->belongsTo(About::class, 'about_id');
    }



}

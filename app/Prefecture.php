<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
   protected $fillable =['name'];
   
    public function areagroup()
    {
        return $this->belongsTo(AreaGroup::class);
    }
    
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}

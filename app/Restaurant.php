<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name','area_group_id'];
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
      public function favorite_users(){
        return $this->belongsToMany(User::class);
        }
}


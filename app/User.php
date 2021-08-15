<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
    
       
     public function favorites(){
        return $this->belongsToMany(Restaurant::class,'favorites','user_id','restaurant_id')->withTimestamps();
        }
    

    public function favorite($restaurantId)
    {
        $exist = $this->is_favorites($restaurantId);
        
  
        
        if($exist){
            return false;
        }else{
            $this->favorites()->attach($restaurantId);
            return true;
        }
    }
    
    public function unfavorite($restaurantId)
    {
        $exist = $this->is_favorites($restaurantId);
        

        if($exist){
            $this->favorites()->detach($restaurantId);
            return true;
        }else{
            return false;
        }
    }
      public function is_favorites($restaurantId)
    {
        return $this->favorites()->where('restaurant_id', $restaurantId)->exists();
        
    }
    
 
    public function loadRelationshipCounts()
    {
        $this->loadCount("restaurants","favorites");
    }
   
}

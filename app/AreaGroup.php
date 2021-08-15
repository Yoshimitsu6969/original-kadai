<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class AreaGroup extends Model
{
    
    public function prefectures(){
    
    return $this->hasmany(Prefecture::class);
}
}
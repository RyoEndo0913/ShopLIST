<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';


    public function getUnitAgeAttribute() {
        return $this->owner_age .'歳';
    
    }

    public function getOwnerSexAttribute() {

        if($this->attributes['owner_sex'] == 1) {
            return "男";
        } else {
            return "女";
        }    
    }

}

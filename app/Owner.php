<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';


    // 生年月日フォーマット
    public function getBirthdayAttribute() {
        return date('Y年m月d日', strtotime($this->owner_birth));
    }

    public function getUnitAgeAttribute() {
        return $this->owner_age .'歳';
    
    }

    // 性別フラグを変換して返す
    public function getOwnerSexAttribute() {
        if($this->attributes['owner_sex'] == 1) {
            return "男";
        } else {
            return "女";
        }    
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    public function getOwnerSexAttribute() {

        $owner_sex = [
            '1' => '男',
            '2' => '女'
        ];
        return array_get($owner_sex, $this->owner_sex__id);
    
    }
}

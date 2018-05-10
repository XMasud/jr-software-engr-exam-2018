<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    //

    public function programming_languages(){

        return $this->hasMany(ProgrammingLanguage::class);
    }

    public function languages(){

        return $this->hasMany(Language::class);
    }

}

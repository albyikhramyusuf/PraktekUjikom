<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang_studi extends Model
{
    public function kompetensikeahlian()
    {
        return $this->hasMany('App\KompetensiKeahlian', 'bidang_id');
    }
}

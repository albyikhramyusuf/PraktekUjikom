<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi_keahlian extends Model
{
    public function bidangstudi()
    {
        return $this->belongsTo('App\BidangStudi', 'bidang_id');
    }
    public function guru()
    {
        return $this->hasMany('App\Guru', 'kompetensi_id');
    }
    public function standarkompetensi()
    {
        return $this->hasMany('App\StandarKompetensi', 'kompetensi_id');
    }
    public function siswa()
    {
        return $this->hasMany('App\Siswa', 'kompetensi_id');
    }
}

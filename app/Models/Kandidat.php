<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $table = 'kandidat';
    
    protected $guarded = ['id'];

    // public function kandidat ()
    // {
    //     return $this->hasMany('App\Models\Pemilih');
    // }
    public function voters()
    {
        return $this->hasMany('App\Models\Pemilih');
    }
}

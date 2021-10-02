<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;

    protected $table = 'pemilih';
    
    protected $guarded = ['id'];

    // public function status()
    // {
    //     return $this->belongsTo('App\Models\Status');
    // }
    public function kandidat()
    {
        return $this->belongsTo('App\Models\Kandidat', 'id_kandidat', 'id');
    }
    public function status()
    {
        return $this->hasOne('App\Models\Status');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voters extends Model
{
    use HasFactory;

    protected $table = 'pemilih';
    
    protected $guarded = ['id'];

    
    public function status()
    {
        return $this->hasOne('App\Status');
    }
    
}

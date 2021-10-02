<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    
    protected $guarded = ['id'];

    public function voters()
    {
        return $this->belongsTo('App\Models\Voters');
    }
    public function pemilih()
    {
        return $this->hasMany('App\Models\Pemilih');
    }
}

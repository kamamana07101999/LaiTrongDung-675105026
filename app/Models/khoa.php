<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khoa extends Model
{
    use HasFactory;

    protected $fillable=[
        'tenkhoa',
    ];
    public function Sinhviens(){
        return $this->belongsTo('App\Models\Sinhvien');
    }
    public function dangkys(){
        return $this->belongsTo('App\Models\dangkydetai');
    }
    public function duyets(){
        return $this->belongsTo('App\Models\Duyet');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duyet extends Model
{
    use HasFactory;
    protected $fillable=[
        'msdt',
        'name',
        'masv',
        'tendetai',
        'thoigiandangky',
        'thoigiannop',
        'linhvuc',
        'name',
        'tenkhoa',

    ];
    public function Detais(){
        return $this->belongsTo('App\Models\Detai');
    }
    public function sinhviens(){
        return $this->hasOne('App\Models\Sinhvien');
    }
    public function khoas(){
        return $this->belongsTo('App\Models\khoa');
    }
}

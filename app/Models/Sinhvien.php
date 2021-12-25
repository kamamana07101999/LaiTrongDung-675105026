<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    protected $fillable=[
        'masv',
        'tensinhvien',
        'diachi',
        'khoa',
        'sodienthoai',
    ];
    public function Detais(){
        return $this->belongsTo('App\Models\Detai');
    }
    public function khoas(){
        return $this->hasOne('App\Models\khoa');
    }
    
}

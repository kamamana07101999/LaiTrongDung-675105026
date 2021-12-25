<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Detai extends Model
{
    use HasFactory;
    protected $fillable =[
        'msdt',
        'tendetai',
        'thoigiandangky',
        'thoigiannop',
        'linhvuc',
    ];
    public function sinhviens(){
        return $this->hasOne('App\Models\Sinhvien');
    }
   
    public function mydetais(){
        return $this->hasOne('App\Models\Mydetai');
    }
    public function scopeSearch($query){
        if($key=request()->key){
            $query=$query->where('msdt','like','%'.$key.'%');
        }
        return $query;
    }
}

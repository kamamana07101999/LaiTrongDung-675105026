<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mydetai extends Model
{
    use HasFactory;
    protected $fillable =[
        'msdt',
        'name',
        'masv',
        'tendetai',
        'thoigiandangky',
        'thoigiannop',
        'linhvuc',
        'diemso',
        'xeploai',
    ];
    public function sinhviens(){
        return $this->hasOne('App\Models\Sinhvien');
    }
    public function Xingiahans(){
        return $this->hasOne('App\Models\Xingiahan');
    }
    public function scopeSearch($query){
        if($key=request()->key){
            $query=$query->Where('msdt','like','%'.$key.'$');
        }
        return $query;
    }
}

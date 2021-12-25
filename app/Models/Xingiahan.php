<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xingiahan extends Model
{
    use HasFactory;
    protected $fillable =[
        'namesv',
        'masvv',
        'msdt',
        'tendetai',
        'thoigiandangky',
        'thoigiannop',
        'linhvuc',
        'lydo',
       
    ];
    public function mydetais(){
        return $this->hasOne('App\Models\Mydetai');
    }
    public function scopeTimkiem($query){
        if($key=request()->key){
            $query=$query->Where('msdt','like','%'.$key.'$');
        }
        return $query;
    }
}

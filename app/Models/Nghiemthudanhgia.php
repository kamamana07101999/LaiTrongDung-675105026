<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nghiemthudanhgia extends Model
{
    use HasFactory;
    protected $fillable=[
        'msdt',
        'name',
        'masv',
        'tendetai',
        'thuky',
        'phanbien1',
        'phanbien2',
        'phanbien3',
        'mshoidong',
        'linhvuc',
        'name',
        'tenkhoa',

    ];
    public function scopeSearch($query){
        if($key=request()->key){
            $query=$query->where('msdt','like','%'.$key.'%');
        }
        return $query;
    }
}

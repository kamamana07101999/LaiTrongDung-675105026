<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dangkydetai extends Model
{
    use HasFactory;
    public function khoas(){
        return $this->hasOne('App\Models\khoa');
    }
}

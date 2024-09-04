<?php

namespace App\Models;

use App\Models\CV;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technologie extends Model
{
    use HasFactory;

    public function cv(){
        return $this->belongsToMany(CV::class, 'cv_technologies');
    }
}

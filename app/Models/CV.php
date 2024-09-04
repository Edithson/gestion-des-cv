<?php

namespace App\Models;

use App\Models\Technologie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CV extends Model
{
    protected $guarded = [];
    protected $table = 'cv';
    use HasFactory;

    public function technologies(){
        return $this->belongsToMany(Technologie::class, 'cv_technologies');
    }
}

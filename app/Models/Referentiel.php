<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function getFormationsCountAttribute()
    {
        return $this->formations()->count();
    }
}

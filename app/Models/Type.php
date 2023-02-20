<?php

namespace App\Models;

use App\Models\Referentiel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function referentiels()
    {
        return $this->hasMany(Referentiel::class);
    }
}

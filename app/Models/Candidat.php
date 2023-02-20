<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Candidat extends Model
{
    use HasFactory;

    public function formations()
    {
        return $this->belongsToMany(Formation::class);
    }

    protected $table = 'candidats';

}

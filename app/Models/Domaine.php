<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function stats()
    {
        return $this->hasMany(Stat::class);
    }



    public function entrainements()
    {
        return $this->hasMany(Entrainement::class, 'domaine_id');
    }
}

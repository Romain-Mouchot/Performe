<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrainement extends Model
{
    use HasFactory;


    protected $fillable = [
        'domaine_id',
        'title',
        'link',
        'difficulte',
        'durée',
    ];



    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'domaine_id');
    }

}

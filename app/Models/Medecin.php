<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;

    protected $table = 'medecin';
    protected $fillable = ['specialisation_id', 'medecin_nom', 'medecin_prenom', 'medecin_ville', 'medecin_adress', 'medecin_numero', 'image'];

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class, 'specialisation_id', 'id');
    }
}

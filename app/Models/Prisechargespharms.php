<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisechargespharms extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'famille_id', 'nom_prestataire', 'prenom_prestataire', 'nom_user', 'prenom_user', 'sub_total', 'prise_charge', 'total', 'totalIPM'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function famille()
    {
        return $this->belongsTo(Famille::class, 'famille_id', 'user_id');
    }
}

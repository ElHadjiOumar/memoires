<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opticien extends Model
{
    use HasFactory;

    protected $table = 'opticien';
    protected $fillable =['opticien_nom','opticien_prenom','opticien_ville','opticien_adress','opticien_numero'];
}

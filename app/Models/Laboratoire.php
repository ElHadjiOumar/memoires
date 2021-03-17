<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;

    protected $table = 'laboratoire';
    protected $fillable =['laboratoire_nom','laboratoire_type','laboratoire_ville','laboratoire_adress','laboratoire_numero'];
}

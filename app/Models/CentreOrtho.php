<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreOrtho extends Model
{
    use HasFactory;

    protected $table = 'centreOrtho';
    protected $fillable =['centreOrtho_nom','centreOrtho_ville','centreOrtho_adress','centreOrtho_numero'];
}

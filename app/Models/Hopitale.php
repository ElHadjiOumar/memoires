<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopitale extends Model
{
    use HasFactory;

    protected $table = 'hopitale';
    protected $fillable =['hopitale_nom','hopitale_type','hopitale_ville','hopitale_adress','hopitale_numero','status'];
}

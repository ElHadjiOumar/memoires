<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraismedics extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisecharge_id','nom', 'montant'
   ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraispharms extends Model
{
    use HasFactory;

    protected $fillable = [
        'prisechargespharms_id','nom','prix','qt', 'montant'
   ];

}

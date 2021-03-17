<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;

    protected $table = 'medicament';
    protected $fillable =['maladie_id','medicament_nom','medicament_caracteristique','image'];

    public function maladie()
    {
        return $this->belongsTo(Maladie::class,'maladie_id','id');
    }
}

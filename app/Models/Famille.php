<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    protected $table = 'famille';
    protected $fillable =['user_id','nom','prenom','position','date_nais','image'];

    

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}

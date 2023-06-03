<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    public function entreprise() 
    { 
        return $this->hasMany(entreprise::class); 
    }
    use HasFactory;
}

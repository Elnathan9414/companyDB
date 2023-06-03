<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villes extends Model
{
    public function pays() 
    { 
        return $this->belongsTo(pays::class); 
    }
    public function commune() 
    { 
        return $this->hasMany(Commune::class); 
    }
    public function entreprise() 
    { 
        return $this->hasMany(entreprise::class); 
    }
    use HasFactory;
}

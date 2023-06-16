<?php

namespace App\Models;

use Database\Factories\VillesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villes extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return VillesFactory::new();
    }
    
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
    
}

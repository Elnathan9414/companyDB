<?php

namespace App\Models;

use Database\Factories\PaysFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    use HasFactory;

    
    public function ville() 
    { 
        return $this->hasMany(villes::class); 
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

<?php

namespace App\Models;

use Database\Factories\SecteurFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return SecteurFactory::new();
    }
    
    public function entreprise() 
    { 
        return $this->hasMany(entreprise::class); 
    }
    
}

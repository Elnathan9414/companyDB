<?php

namespace App\Models;

use Database\Factories\CommunesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;


    protected static function newFactory()
{
    return CommunesFactory::new();
}
    
public function pays() 
{ 
    return $this->belongsTo(pays::class); 
}
public function ville() 
{ 
    return $this->belongsTo(villes::class); 
}
public function entreprise() 
{ 
    return $this->hasMany(entreprise::class); 
}
    
}

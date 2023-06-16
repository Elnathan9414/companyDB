<?php

namespace App\Models;

use Database\Factories\entrepriseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;


    protected static function newFactory()
{
    return entrepriseFactory::new();
}

    public function pays()
{ 
    return $this->belongsTo(pays::class); 
}

public function ville()
{ 
    return $this->belongsTo(villes::class); 
}

public function commune()
{ 
    return $this->belongsTo(Commune::class); 
}

public function secteur()
{ 
    return $this->belongsTo(Secteur::class); 
}

   
}

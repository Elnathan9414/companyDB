<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arondissement extends Model
{
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
    use HasFactory;
}

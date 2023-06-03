<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arrondissement extends Model
{
    public function pays() 
    { 
        return $this->belongsTo(pays::class); 
    }
    public function ville() 
    { 
        return $this->belongsTo(villes::class); 
    }
    use HasFactory;
}

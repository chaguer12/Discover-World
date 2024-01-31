<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destinations extends Model
{
    use HasFactory;
    
    public function Recits(): HasMany{
        return $this->hasMany(Recits::class);
    }
}

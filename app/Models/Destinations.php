<?php

namespace App\Models;

use App\Http\Controllers\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destinations extends Model
{
    use HasFactory;
    
    public function Recits(): HasMany{
        return $this->hasMany(Recits::class);
    }

    public function Photos():BelongsTo{
        return $this->belongsTo(Photo::class);
    }
}

<?php

namespace App\Models;

use App\Models\recits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Photos extends Model
{
    use HasFactory;
    protected $fillable = [
        "image",
        "recits_id",

    ];

    public function Destination() :HasOne{
        return $this->hasOne(Photos::class);
    }

    public function Recits(){
        return $this->belongsTo(Recits::class , 'recits_id');
    }

    public function getImageAttribute($value)
    {
        // Assuming 'image' is stored in a 'path' column
        return asset('images/storage/' . $value);
    }
}

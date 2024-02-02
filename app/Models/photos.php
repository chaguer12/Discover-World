<?php

namespace App\Models;

use App\Http\Controllers\Recit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class photos extends Model
{
    use HasFactory;
    protected $fillable = [
        "image",
        "recit_id",

    ];

    public function Destination() :HasOne{
        return $this->hasOne(Photos::class);
    }

    public function Recits():BelongsTo{
        return $this->belongsTo(Recits::class , 'recits_id');
    }
}

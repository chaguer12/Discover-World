<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recits extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "content",
        "dest_id"
    ];

    public function Photos():HasMany{
        return $this->hasMany(Photos::class);
    }
}

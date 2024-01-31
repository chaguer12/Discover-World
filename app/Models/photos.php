<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class photos extends Model
{
    use HasFactory;

    public function Destination() :HasOne{
        return $this->hasOne(Photos::class);
    }
}

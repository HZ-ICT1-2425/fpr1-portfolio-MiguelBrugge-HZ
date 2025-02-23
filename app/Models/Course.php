<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    public function tests() : HasMany
    {
        return $this->hasMany(Test::class);
    }
}

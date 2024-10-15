<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;

    protected $table = "flights";

    public function tickets()
    {
        return $this->hasMany(tickets::class);
    }
}

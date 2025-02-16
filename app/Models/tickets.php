<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;

    protected $table = "tickets";

    public function flight()
    {
        return $this->belongsTo(flights::class);
    }
}

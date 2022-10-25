<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Club;

class stadion extends Model
{
    use HasFactory;

    public function clubs()
    {
        return $this->belongsTo(Club::class);
    }
}

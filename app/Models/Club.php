<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\stadion;

class Club extends Model
{
    use HasFactory;

    public function stadion()
    {
        return $this->hasOne(stadion::class);
    }
    public function DetilClub(){
        return $this->hasOne(DetilClub::class);
    }
}

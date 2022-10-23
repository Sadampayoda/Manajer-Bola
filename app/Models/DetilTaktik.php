<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taktik;

class DetilTaktik extends Model
{
    use HasFactory;

    public function taktiks()
    {
        return $this->hasOne(Taktik::class);
    }
}

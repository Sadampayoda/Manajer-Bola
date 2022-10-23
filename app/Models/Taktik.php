<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelatih;
use App\Models\DetilTaktik;

class Taktik extends Model
{
    use HasFactory;

    public function pelatihs()
    {
        return $this->belongsTo(Pelatih::class,'foreign_key');
    }

    public function detil_taktiks()
    {
        return $this->belongsToMany(DetilTaktik::class,'foreign_key');
    }

}

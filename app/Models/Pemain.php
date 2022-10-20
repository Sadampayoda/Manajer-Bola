<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistik;

class Pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id_pemain'];
    

    public function statistik()
    {
        return $this->hasOne(Statistik::class);
    }
}

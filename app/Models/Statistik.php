<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemain;

class Statistik extends Model
{
    use HasFactory;

    protected $guarded = ['id_statistik'];
    


    public function pemain()
    {
        return $this->hasOne(Pemain::class);
    }
}

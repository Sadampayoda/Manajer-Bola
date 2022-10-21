<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistik;

class Pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id_pemain'];
    

    public function Statistik()
    {
        return $this->belongsTo(Statistik::class);
    }
}

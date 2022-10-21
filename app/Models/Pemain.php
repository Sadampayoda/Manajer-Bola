<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistik;
use GuzzleHttp\Psr7\Request;

class Pemain extends Model
{
    use HasFactory;

    protected $guarded = ['id_pemain'];
    

    public function Statistik()
    {
        return $this->belongsTo(Statistik::class,'statistik_id');
    }

    public function scopeSearchPemain($query,$nama)
    {
        $query->when($nama ?? false , function($query,$nama){
            return $query->where('nama','like','%'.$nama.'%');
        });
    }
}

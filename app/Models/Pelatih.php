<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taktik;

class Pelatih extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function taktiks()
    {
        return $this->hasMany(Taktik::class,'pelatih_id');
    }
    public function DetilClub(){
        return $this->hasOne(DetilClub::class);
    }
}

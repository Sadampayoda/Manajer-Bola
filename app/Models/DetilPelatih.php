<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilPelatih extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Pelatih(){
        return $this->belongsTo(Pelatih::class,'pelatih_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}

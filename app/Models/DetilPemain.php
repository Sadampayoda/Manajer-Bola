<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilPemain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Pemain(){
        return $this->belongsTo(Pemain::class,'pemain_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}

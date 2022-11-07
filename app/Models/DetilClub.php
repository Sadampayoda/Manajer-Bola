<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetilClub extends Model
{
    use HasFactory;


    public function Club(){
        return $this->belongsTo(Club::class,'club_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}

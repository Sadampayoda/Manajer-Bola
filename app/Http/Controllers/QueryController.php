<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class QueryController extends Controller
{

    public function SusunanPemain($posisi)
    {
        // return $posisi;
        $query = DB::table('pemains')
                ->where('id',$posisi)
                ->get();
        return $query;
    }

    public function checkStatistik($pemain,$posisi)
    {
        // return $pemain;
        // $dbPemain = [];
        // return count($pemain);
        if(count($pemain) == 0){
            return NULL;
        }else{

            $query = DB::table('statistiks')
                        ->where('id',$pemain[0]->statistik_id)
                        ->get();
            $statistik = $query[0]->tekel + $query[0]->passing + $query[0]->shooting       +$query[0]->speed + $query[0]->dribling;
    
            $result = $statistik/5;
            if($pemain[0]->posisi == $posisi)
            {
                $dbPemain = [
                    'nama' => $pemain[0]->nama,
                    'posisi' => $pemain[0]->posisi,
                    'ratingAwal' => $result,
                    'ratingAkhir' => $result
                ];
            }else{
                
                $dbPemain = [
                    'nama' => $pemain[0]->nama,
                    'posisi' => $pemain[0]->posisi,
                    'ratingAwal' => $result,
                    'ratingAkhir' => round($result - 30,2)
                ];
            }
            return $dbPemain;
        }

    }
}

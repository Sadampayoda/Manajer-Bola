<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiPemainController extends Controller
{
    protected $PosisiPemain;

    public function __construct($PosisiPemain)
    {
        $this->PosisiPemain = $PosisiPemain;
    }

    public function formasi($formasi)
    {
        $data = [];
        $query = new QueryController();
        //penyerangKiri
        $penyerangKiri = $query->SusunanPemain($this->PosisiPemain['penyerang-kiri']);
        $resultPenyerangKiri = $query->checkStatistik($penyerangKiri,'penyerang');
        //penyerang tengah kiri
        $penyerangTengahKiri = $query->SusunanPemain($this->PosisiPemain['penyerang-tengah-kiri']);
        $resultPenyerangTengahKiri = $query->checkStatistik($penyerangTengahKiri,'penyerang');
        //penyerang tengah 
        $penyerangTengah = $query->SusunanPemain($this->PosisiPemain['penyerang-tengah']);
        $resultPenyerangTengah = $query->checkStatistik($penyerangTengah,'penyerang');
        //penyerang tengah kanan
        $penyerangTengahKanan = $query->SusunanPemain($this->PosisiPemain['penyerang-tengah-kanan']);
        $resultPenyerangTengahKanan = $query->checkStatistik($penyerangTengahKanan,'penyerang');
        //penyerang kanan 
        $penyerangKanan = $query->SusunanPemain($this->PosisiPemain['penyerang-kanan']);
        $resultPenyerangKanan = $query->checkStatistik($penyerangKanan,'penyerang');

        //Gelandang kiri 
        $gelandangKiri = $query->SusunanPemain($this->PosisiPemain['gelandang-kiri']);
        $resultGelandangKiri = $query->checkStatistik($gelandangKiri,'gelandang');
        //Gelandang tengah kiri 
        $gelandangTengahKiri = $query->SusunanPemain($this->PosisiPemain['gelandang-tengah-kiri']);
        $resultGelandangTengahKiri = $query->checkStatistik($gelandangTengahKiri,'gelandang');
        //Gelandang tengah  
        $gelandangTengah = $query->SusunanPemain($this->PosisiPemain['gelandang-tengah']);
        $resultGelandangTengah = $query->checkStatistik($gelandangTengah,'gelandang');
        //Gelandang tengah kanan 
        $gelandangTengahKanan = $query->SusunanPemain($this->PosisiPemain['gelandang-tengah-kanan']);
        $resultGelandangTengahKanan = $query->checkStatistik($gelandangTengahKanan,'gelandang');
        //Gelandang kanan 
        $gelandangKanan = $query->SusunanPemain($this->PosisiPemain['gelandang-kanan']);
        $resultGelandangKanan = $query->checkStatistik($gelandangKanan,'gelandang');

        //belakang kiri 
        $belakangKiri = $query->SusunanPemain($this->PosisiPemain['belakang-kiri']);
        $resultBelakangKiri = $query->checkStatistik($belakangKiri,'belakang');
        //belakang tengah kiri 
        $belakangTengahKiri = $query->SusunanPemain($this->PosisiPemain['belakang-tengah-kiri']);
        $resultBelakangTengahKiri = $query->checkStatistik($belakangTengahKiri,'belakang');
        //Belakang tengah
        $belakangTengah = $query->SusunanPemain($this->PosisiPemain['belakang-tengah']);
        $resultBelakangTengah = $query->checkStatistik($belakangTengah,'belakang');
        //Belakang tengah kanan
        $belakangTengahKanan = $query->SusunanPemain($this->PosisiPemain['belakang-tengah-kanan']);
        $resultBelakangTengahKanan = $query->checkStatistik($belakangTengahKanan,'belakang');
        //Belakang kanan
        $belakangKanan = $query->SusunanPemain($this->PosisiPemain['belakang-kanan']);
        $resultBelakangKanan = $query->checkStatistik($belakangKanan,'belakang');

        //kiper
        $kiper = $query->SusunanPemain($this->PosisiPemain['kiper']);
        $resultKiper = $query->checkStatistik($kiper,'kiper');

        if($formasi == 2){
            $data = [
                'penyerang-kiri' => $resultPenyerangKiri,
                'penyerang-tengah-kiri' => $resultPenyerangTengahKiri,
                'penyerang-tengah-kanan' => $resultGelandangTengahKanan,
                'penyerang-kanan' => $resultPenyerangKanan,
                'gelandang-kiri' => $resultGelandangKiri,
                'gelandang-kanan' => $resultGelandangKanan,
                'belakang-kiri' => $resultBelakangKiri,
                'belakang-tengah-kiri' => $resultBelakangTengahKiri,
                'belakang-tengah-kanan' => $resultBelakangTengahKanan,
                'belakang-kanan' => $resultBelakangKanan,
                'kiper' => $resultKiper
            ];
        }elseif($formasi == 3 || $formasi == 4 || $formasi == 5 || $formasi == 6)
        {
            $data = [
                'penyerang-kiri' => $resultPenyerangKiri,
                'penyerang-tengah' => $resultPenyerangTengah,
                'penyerang-kanan' => $resultPenyerangKanan,
                'gelandang-kiri' => $resultGelandangKiri,
                'gelandang-tengah' => $resultGelandangTengah,
                'gelandang-kanan' => $resultGelandangKanan,
                'belakang-kiri' => $resultBelakangKiri,
                'belakang-tengah-kiri' => $resultBelakangTengahKiri,
                'belakang-tengah-kanan' => $resultBelakangTengahKanan,
                'belakang-kanan' => $resultBelakangKanan,
                'kiper' => $resultKiper
            ];

        
        }elseif($formasi == 7)
        {
            $data = [
                'penyerang-kiri' => $resultPenyerangKiri,
                'penyerang-tengah' => $resultPenyerangTengah,
                'penyerang-kanan' => $resultPenyerangKanan,
                'gelandang-kiri' => $resultGelandangKiri,
                'gelandang-kanan' => $resultGelandangKanan,
                'belakang-kiri' => $resultBelakangKiri,
                'belakang-tengah-kiri' => $resultBelakangTengahKiri,
                'belakang-tengah' => $resultBelakangTengah,
                'belakang-tengah-kanan' => $resultBelakangTengahKanan,
                'belakang-kanan' => $resultBelakangKanan,
                'kiper' => $resultKiper
            ];
        }

        return $data;


        




        // $data = [
        //     'penyerang-kiri' => $resultPenyerangKiri,
        //     'penyerang-tengah-kiri' => $resultPenyerangTengahKiri,
        //     'penyerang-tengah-kanan' => $resultPenyerangTengahKanan,
        //     'penyerang-kanan' => $resultPenyerangKanan,
        //     'gelandang-kiri' => $resultGelandangKiri
        // ];
        // return $data;
    }
}

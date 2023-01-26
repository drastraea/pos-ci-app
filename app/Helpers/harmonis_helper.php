<?php defined('BASEPATH');
function penyebut($nilai) {
    $nilai = (int)$nilai;
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}
function terbilang($nilai) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }           
    return $hasil;
}

function  getBulan($bln){
        switch  ($bln){
            case  1:
            return  "Januari";
            break;
            case  2:
            return  "Februari";
            break;
            case  3:
            return  "Maret";
            break;
            case  4:
            return  "April";
            break;
            case  5:
            return  "Mei";
            break;
            case  6:
            return  "Juni";
            break;
            case  7:
            return  "Juli";
            break;
            case  8:
            return  "Agustus";
            break;
            case  9:
            return  "September";
            break;
            case  10:
            return  "Oktober";
            break;
            case  11:
            return  "November";
            break;
            case  12:
            return  "Desember";
            break;
        }
    }
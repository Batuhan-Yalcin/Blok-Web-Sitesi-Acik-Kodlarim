<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="mesajlar";


$baglan = new mysqli($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
$baglan->set_charset("utf8");

if ($baglan->connect_error) {
    die("Bağlantı hatası: " . $baglan->connect_error);
}

?>
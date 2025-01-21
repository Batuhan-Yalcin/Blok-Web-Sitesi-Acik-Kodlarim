<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="mesajlar";


$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if(!$baglan)
{
    die("Veri Tabanı Bağlantı İşlemi Başarısız".mysqli_connect_error()); /*    Die nin kullanım amacı burda programı veritabanı işlemi başarısız diyip durdurması için yaptım */
}

?>
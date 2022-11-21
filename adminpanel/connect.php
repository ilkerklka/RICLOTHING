<?php

try {
    //code...

$baglan = new PDO("mysql:host=localhost;dbname=riclothing;charset=UTF8", "root", "");
} 
catch (PDOException $e) {
    
    echo $e->getMessage();
}


if (isset($_SESSION['giris'])) {
    // echo $_SESSION['giris'] ."<br>";
    
    $kullanicininbilgiler = $baglan->prepare("SELECT * FROM kullanicilar WHERE mail = ? LIMIT 1"); 
    $kullanicininbilgiler->execute([$_SESSION['giris']]);
    $kullanicininbilgilersayisi = $kullanicininbilgiler->rowCount();
    $kullanici = $kullanicininbilgiler->fetch(PDO::FETCH_ASSOC);
    
    if ($kullanicininbilgilersayisi > 0) {
        $kullaniciadi = $kullanici['isim'];
        $kullanicisoyadi = $kullanici['soyisim'];
        $kullanicidogumtarihi = $kullanici['dogumtarih'];
        $kullanicimail = $kullanici['mail'];
        $kullanicicinsiyet = $kullanici['cinsiyet'];
        $kullanicisifre = $kullanici['sifre'];
    }

}


  

?>
<!-- ---------------------------------Detay Güncelle--------------------------------- -->
<?php

include("connect.php");
session_start();

if (isset($_POST["detayguncelle"])) {
        $ad =  @$_POST["isim"];
        $soyad = @$_POST["Soyisim"];
        $dgmtrh = @$_POST["Dogumtarihi"];
        $cinsiyet = @$_POST["erkek"];
        $id = @$_POST["kullaniciid"];


        //  if ($ad and $soyad and $dgmtrh and $cinsiyet ) {
        //        echo 'bu kısımda problem yok';
        //    }


        $detayduzen = $baglan->prepare("UPDATE kullanicilar 
        set 
        isim =:isim,
        soyisim=:soyisim,
        dogumtarih=:dgm,
        cinsiyet=:cins
        where
        id=:id
        ");
        $ansert = $detayduzen->execute(array(
                "isim" => $ad,
                "soyisim" => $soyad,
                "dgm" => $dgmtrh,
                "cins" => $cinsiyet,
                "id" => $id
        ));
        if ($ansert) {
                header("location:../index.php");
        } else {
        }
}
?>
<!-- ---------------------------------Detay Güncelle--------------------------------- -->
<!-- ---------------------------------Giriş Detay Güncelle--------------------------------- -->
<?php


if (isset($_POST["güvenlikayar"])) {


       
        $mail = @$_POST["mailgiris"];
        $eskisifre = @$_POST["sifregiriseski"];
        $yenisifre = @$_POST["sifregirisyeni"];
        $kullanicimid = @$_POST["kullaniciid2"];
        $eskisifrekontrol = @$_POST["eskisfirrr"];
        if ($eskisifre != $eskisifrekontrol) {
                echo '<script>alert("Sifre doğru değil");</script>';
                header("location:../index.php");
        } else {
                $girisguncelle = $baglan->prepare("UPDATE kullanicilar 
                        set
                        mail =:mail,
                        sifre=:sifre
                        where
                        id=:id
                        ");
                $insert = $girisguncelle->execute(array(
                        "mail" => $mail,
                        "sifre" => $yenisifre,
                        "id" => $kullanicimid
                ));
                if ($insert) {
                        header("location:../index.php");
                } else {
                }
        }
}





?>
<!-- ---------------------------------Giriş Detay Güncelle--------------------------------- -->
<!------------------------------------Adres Ekle---------------------------------------------->
<?php

if (isset($_POST["adresekle"])) {

$adresad = @$_POST["isimadres"];
$adressoyad = @$_POST["Soyisimadres"];
$adresBaslik = @$_POST["adresbas"];
$adrestelefonnumarasi = @$_POST["telefon"];
$adresil = @$_POST["il"];
$adresilce = @$_POST["ilce"];
$adresmahalle = @$_POST["mahalle"];
$adresacikadres = @$_POST["tamadres"];
$adreskullaniciid = @$_POST["adkullaniciid"];



$adresekle = $baglan->prepare("INSERT into adres 
        set
        kullaniciid =:kullaniciid,
        isim =:isim,
        soyisim =:soyisim,
        telefon =:telefon,
        il =:il,
        ilce =:ilce,
        mahalle =:mahalle,
        tamadres =:tamadres,
        adresbasligi =:adresbasligi
        ");

$onsert = $adresekle->execute(array(
        "kullaniciid" => $adreskullaniciid,
        "isim" => $adresad,
        "soyisim" => $adressoyad,
        "telefon" => $adrestelefonnumarasi,
        "il" => $adresil,
        "ilce" => $adresilce,
        "mahalle" => $adresmahalle,
        "tamadres" => $adresacikadres,
        "adresbasligi" => $adresBaslik
));


}

?>
<!------------------------------------Adres Ekle---------------------------------------------->
<!------------------------------------Admin Panel Giriş---------------------------------------------->
<?php

if (isset($_POST["admingiris"])) {
        $adminkullanici = @$_POST["kullanici"];
        $adminsifre = @$_POST["sifre"];

        if ($adminkullanici != ""  and $adminsifre != "") {
                $admingiris = $baglan->prepare("SELECT * FROM admin WHERE adminuser = ? and adminsifre = ?");
                $admingiris->execute([$adminkullanici, $adminsifre]);
                $adminsayisi = $admingiris->rowCount();
      
                if ($adminsayisi > 0) {
                  
                  $_SESSION['admin'] = $adminkullanici ;
                  echo '<script>alert("giriş işlemi Başarılı");</script>';
                  header("refresh:1 ,url=anasayfa.php");
                }else {
                  echo '<script>("Bu bilgilere sahip kullanıcı bulunmamakta");</script>';
                  header("refresh:1 ,url=index.php");
                }
              }else {
                echo '<script>("Lütfen Boş Geçmeyin");</script>';
                header("refresh:1 ,url=index.php");
              }
}

?>
<!------------------------------------Admin Panel Giriş---------------------------------------------->
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

        if ($onsert) {
                header("location:../index.php");
        } else {
                echo "bir sıkıntı var";
        }
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

                        $_SESSION['admin'] = $adminkullanici;
                        echo '<script>alert("giriş işlemi Başarılı");</script>';
                        header("refresh:1 ,url=anasayfa.php");
                } else {
                        echo '<script>("Bu bilgilere sahip kullanıcı bulunmamakta");</script>';
                        header("refresh:1 ,url=index.php");
                }
        } else {
                echo '<script>("Lütfen Boş Geçmeyin");</script>';
                header("refresh:1 ,url=index.php");
        }
}

?>
<!------------------------------------Admin Panel Giriş---------------------------------------------->
<!------------------------------------Ürün Ekle---------------------------------------------->
<?php
if (isset($_POST["urunekle"])) {
        if (isset($_FILES['urunfoto'])) {
                $hata = $_FILES['urunfoto']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "../image/" .$resimAdi ; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto1'])) {
                $hata = $_FILES['urunfoto1']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto1']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto1']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto1']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "../image/" .$resimAdi ; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto1"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto2'])) {
                $hata = $_FILES['urunfoto2']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto2']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto2']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto2']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "../image/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto2"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto3'])) {
                $hata = $_FILES['urunfoto3']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto3']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto3']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto3']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "../image/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto3"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto4'])) {
                $hata = $_FILES['urunfoto4']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto4']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto4']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto4']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "../image/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto4"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
    

        $urunisim         = @$_POST["urunad"];
        $urunanakategori  = @$_POST["anakategori"];
        $urunaltkategori1 = @$_POST["altkategori"];
        $urunaltkategori2 = @$_POST["altkategori2"];
        $urunbilgi        = @$_POST["urunbilgi"];
        $urunBedenS       = @$_POST["Sbeden"];
        $urunBedenM       = @$_POST["Mbeden"];
        $urunBedenL       = @$_POST["Lbeden"];
        $urunBedenXL      = @$_POST["XLbeden"];
        $urunFiyat        = @$_POST["Fiyat"];
        $urunFoto1        = @$_FILES["urunfoto"]["name"];
        $urunFoto2        = @$_FILES["urunfoto1"]["name"];
        $urunFoto3        = @$_FILES["urunfoto2"]["name"];
        $urunFoto4        = @$_FILES["urunfoto3"]["name"];
        $urunFoto5        = @$_FILES["urunfoto4"]["name"];
       


        $urunekle = $baglan->prepare("INSERT into urunler set
                urunadi         =:urunadi,
                urunbilgileri   =:urunbilgileri,
                urunfoto        =:urunfoto,
                urunfoto2       =:urunfoto2,
                urunfoto3       =:urunfoto3,
                urunfoto4       =:urunfoto4,
                urunfoto5       =:urunfoto5,
                urunKategorisi  =:urunkategorisi,
                urunKategorisi1 =:urunkategorisi1,
                urunKategorisi2 =:urunkategorisi2,
                s               =:s,
                m               =:m,
                l               =:l,
                xl              =:xl,
                fiyat           =:fiyat

        ");

        $insert = $urunekle->execute(array(
                "urunadi"           => $urunisim,
                "urunbilgileri"     => $urunbilgi,
                "urunfoto"          => $urunFoto1,
                "urunfoto2"         => $urunFoto2,
                "urunfoto3"         => $urunFoto3,
                "urunfoto4"         => $urunFoto4,
                "urunfoto5"         => $urunFoto5,
                "urunkategorisi"    => $urunanakategori,
                "urunkategorisi1"   => $urunaltkategori1,
                "urunkategorisi2"   => $urunaltkategori2,
                "s"                 => $urunBedenS,
                "m"                 => $urunBedenM,
                "l"                 => $urunBedenL,
                "xl"                => $urunBedenXL,
                "fiyat"             => $urunFiyat  
                
        ));

        if ($insert) {
                echo "başarılı";
        }
}
?>
<!------------------------------------Ürün Ekle---------------------------------------------->
<!------------------------------------Favorilerim---------------------------------------------->
<?php

if (isset($_POST['favoriler'])) {
        $kID = @$_POST['kullaniciid'];
        $uID = @$_POST['urunid'];


        $favekle = $baglan->prepare("INSERT into favoriler set 
        
        urunid      =:urunid,
        musteriid   =:musteriid
        
        ");


        $insert = $favekle->execute(array(
                "urunid"      =>   $uID,
                "musteriid"   =>   $kID

        ));


        if ($insert) {
                echo '<script>("Favorilere başarıyla eklendi");</script>';
                header("refresh:1 ,url=../index.php");
        }else {
                echo "hata";
        }

}

?>
<!------------------------------------Favorilerim---------------------------------------------->
<!------------------------------------Fav Silme---------------------------------------------->
<?php



?>
<!------------------------------------Fav Silme---------------------------------------------->

<!------------------------------------Sepet Ekle---------------------------------------------->
<?php

if (isset($_POST['SepetEkle'])) {
        $kID = @$_POST['kullaniciid'];
        $uID = @$_POST['urunid'];


        $favekle = $baglan->prepare("INSERT into sepet set 
        
        urunid      =:urunid,
        kullaniciid   =:musteriid
        
        ");


        $insert = $favekle->execute(array(
                "urunid"      =>   $uID,
                "musteriid"   =>   $kID

        ));


        if ($insert) {
                echo '<script>("Favorilere başarıyla eklendi");</script>';
                header("refresh:1 ,url=../index.php");
        }else {
                echo "hata";
        }
}

?>

<!------------------------------------Sepet Ekle---------------------------------------------->
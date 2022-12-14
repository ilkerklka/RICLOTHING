
<?php
include ("../adminpanel/connect.php")
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RI CLOTHING - Kayıt ol</title>
    <meta name="robots" content="index,follow"/>
    <link rel="stylesheet" href="../style.css">
    <!--ANİMATE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--ANİMATE-->
    <!--favicon-->
    <link rel="shortcut icon" href="../RI-LOGO.ico">
    <!--favicon-->
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--BOOSTRAP-->
    <!--MDB-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet"/>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    
</head>
<body  style="background-image: url('Girisyapfoto.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

            </div>
            <div class="  col-lg-6 col-md-12 mb-4 mb-md-0 girisyapfoto animate__animated animate__fadeInDown"> 
                <img src="../Fotograflar/RICLOTHING.png"  width="180" height="80" alt="">
    <form class="girisyapform  " name="contactForm" method="POST">
    <?php
    $Ad = @$_POST["Ad"];
    $Soyad = @$_POST["Soyad"];
    $DogumTarih = @$_POST["DogumTarih"];
    $Mail = @$_POST["Mail"];
    $cinsiyet = @$_POST["cinsiyet"];
    $Sifre = @$_POST["Sifre"];

    //  if ($Ad and $Soyad and $DogumTarih and $Mail and $cinsiyet and $Sifre) {
    //      echo 'bu kısımda problem yok';
    //  }


    $MailSorgusu = $baglan->prepare("select * from kullanicilar where mail = ? LIMIT 1");
    $MailSorgusu->execute([$Mail]);
    $MailSorguSayisi = $MailSorgusu->rowCount();

    if ($MailSorguSayisi > 0) {
        echo '<div class="alert alert-danger" >Girmiş Olduğunuz E-mail Zaten mevcut</div>';
    }else{

    $save = $baglan->prepare("insert into kullanicilar set
    
    isim =:Ad,
    soyisim =:Soyad,
    dogumtarih =:DogumTarih,
    mail =:Mail,
    cinsiyet =:cinsiyet,
    sifre =:sifre
    ");

    //  if ($save) {
    //      echo 'bu kısım sorunsuz';
    // }

    $insert =  $save->execute(array(
        "Ad" => $Ad,
        "Soyad" =>$Soyad,
        "DogumTarih" =>$DogumTarih,
        "Mail" =>$Mail,
        "cinsiyet" =>$cinsiyet,
        "sifre" =>$Sifre
    ));

    
    
if ($insert) {
    echo '<div class= "alert alert-success">Kayıdınız Oluşturuldu , giriş bölümüne yönlendiriliyorsunuz...</div>';
    header("refresh:2 ,url=../giris_yap");
}else{
 
}
    
   


}
?>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Adınız</label>
            <input type="text" name="Ad" class="form-control" id="isim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText2" class="form-label">Soyadınız</label>
            <input type="text" name="Soyad" class="form-control" id="soyisim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Doğum Tarihiniz</label>
            <input type="date" name="DogumTarih" class="form-control" id="DogumTarihi" required>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Mail Adresiniz</label>
          <input type="email" name="Mail" class="form-control" id="Mail" aria-describedby="emailHelp" required>
        </div>
        
        <div class="mb-3  ">
            <label for="exampleInputCinsiyet1" class="form-label">Cinsiyetiniz</label> <br>
            <div class="container cinsiyet">
            <input type="radio"  name="cinsiyet" value="ERKEK" id="erkek">
            <label for="erkek" class="form-label">Erkek</label>
            <input type="radio"  name="cinsiyet" value="KADIN" id="kadın">
            <label for="kadın" class="form-label">Kadın</label>
        </div>
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Şifre</label>
          <input type="password" name="Sifre" class="form-control" id="Sifre" required>
        </div>
        
        <button type="submit" class="btn btn-dark">Kayıt Ol</button> <br>
        <div  class="kayıt">Eğer bir hesabınız varsa <a href="../giris_yap/">"Giriş Yap"</a> butonuna tıklayınız</div>
      </form>
            </div>
        </div>
    </div>  
    
    


    

</body>
</html>


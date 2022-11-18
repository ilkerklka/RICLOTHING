<?php
include("../adminpanel/connect.php")

?>


<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RI CLOTHING - Giriş Yap</title>
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
    <form method="POST" class="girisyapform  ">
      <?php
      if ($_POST){
        $Mail = $_POST['mail2'];
        $sifre = $_POST['sifre2'];


        if ($Mail != ""  and $sifre != "") {
          $KullaniciKontrol = $baglan->prepare("SELECT * FROM kullanicilar WHERE mail = ? and sifre = ?");
          $KullaniciKontrol->execute([$Mail, $sifre]);
          $KullaniciKontrolSayisi = $KullaniciKontrol->rowCount();

          if ($KullaniciKontrolSayisi > 0) {
            
            $_SESSION['kullanici']=$Mail;
            echo '<div class=" alert alert-success" >Giriş işlemi başarılı</div>';
            header("refresh:2 ,url=../index.php");
          }else {
            echo '<div class=" alert alert-danger" >Bu bilgilere sahip kullanıcı bulunmamakta</div>';
          }
        }else {
          echo '<div class=" alert alert-danger" >Lütfen Boş geçmeyiniz</div>';
        }
      }
      ?>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Mail Adresiniz</label>
          <input type="email" name="mail2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Şifre</label>
          <input type="password" name="sifre2" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
        </div>
        <button type="submit" class="btn btn-dark">Giriş Yap</button>
        <div  class="kayıt">Eğer bir hesabınız yoksa <a href="../Kayit_ol/">"Kayıt Ol"</a> butonuna tıklayınız</div>
      </form>
            </div>
        </div>
    </div>        
</body>
</html>
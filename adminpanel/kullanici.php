<!DOCTYPE html>
<html lang="tr">
<?php 
session_start();
include("connect.php");
include ("header.php");
?>
<link rel="stylesheet" href="tablo/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="tablo/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="tablo/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="tablo/adminlte.min.css">
 </head>
<body >

<?php
if (isset($_SESSION['admin'])) {

include("navbar.php");
?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sisteme Kayıtlı Kullanıcılar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kullanıcı Numarası</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Mail</th>
                    <th>Cinsiyet</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $formSorgu = $baglan->prepare("SELECT * FROM kullanicilar ORDER BY id ASC");
                    $formSorgu->execute();
              
                    while ($kullanici = $formSorgu->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                  <tr>
                    <td><?php echo $kullanici['id']?></td>
                    <td>
                        <?php echo $kullanici['isim']?>
                    </td>
                    <td> <?php echo $kullanici['soyisim']?></td>
                    <td>  <?php echo $kullanici['mail']?></td>
                    <td> <?php echo $kullanici['cinsiyet']?></td>
                  </tr>

                  <?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Kullanıcı Numarası</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Mail</th>
                    <th>Cinsiyet</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>

    <div style="margin-left: 150px; margin-right: 150px; margin-top: 15px; margin-bottom: 15px;  ">
<h3>Yeni Kullanıcı Oluşturma</h3>
<hr>
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
    echo '<div class= "alert alert-success">Kayıt Oluşturuldu.</div>';
    echo '<meta  http-equiv="refresh"  content="2;URL=kullanici.php">';
}else{
 
}
    
   


}
?>

        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Ad</label>
            <input type="text" name="Ad" class="form-control" id="isim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText2" class="form-label">Soyad</label>
            <input type="text" name="Soyad" class="form-control" id="soyisim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Doğum Tarihini</label>
            <input type="date" name="DogumTarih" class="form-control" id="DogumTarihi" required>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Mail Adresini</label>
          <input type="email" name="Mail" class="form-control" id="Mail" aria-describedby="emailHelp" required>
        </div>
        
        <div class="mb-3  ">
            <label for="exampleInputCinsiyet1" class="form-label">Cinsiyet</label> <br>
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
       
      </form>
      </div>

<?php 
include ("footer.php");
                    }
?>


<script src="script.js"></script>
</body>
</html>

  <?php
   session_start(); 
  include ("adminpanel/connect.php");

?>
<!DOCTYPE html>
<html lang="tr">
<?php
include ("header.php");


?>
</head>
  <body  style="font-family: 'News Cycle', sans-serif;">
<?php
 include ("navbar.php");
?>

    <div id="modalNesne" class="modal fade">
      <div class="modal-dialog">
            <div class="modal-content">
             
              <div class="modal-body">
                  <div class="col-md-12">
                     <img src="indirim.png" style="width: 100%;" class="img-responsive">
                 </div>
              </div>
          </div>
      </div>
  </div>
  <!-- // modal nesnesi bitiş -->



    
  <?php
  if (isset($_SESSION['giris'])) {
   echo '<div class="alert alert-success" style="text-align:center;"> HOŞGELDİN : ' ."<b>" .$kullaniciadi ." " .$kullanicisoyadi .'</b></div>';
 }
 ?>
    <div  class="card bg-dark text-white">
      <img src="anasayfa1.png" style="opacity: 100%;" width="100%"   class="card-img" alt="...">
      <div class=" anasayfafoto1 card-img-overlay">
        <p>Tarzını Seç Alışverişe Başla</p>

      </div>
    </div>
    <div  class="card bg-dark text-white">
      <img src="erkad.png" style="opacity: 100%;" width="100%"   class="card-img" alt="...">
      <div class=" anasayfafoto2 card-img-overlay">
        <h1 style="text-align: center; text-decoration: underline;">Size Uygun Tüm Seçenekler</h1><br><br><br><br>
        <p class="kadin"><a href="">Kadın</a><a href="">Erkek</a></p>

      </div>
    </div>
    









    <main class="main">
      
      <div class="kontrol">
          <h4>En Çok Satılan Ürünler</h4>
          <p>
              <span>&#139;</span>
              <span>&#155;</span>
          </p>
      </div>
      <div class="section">
      <?php 
                    $formSorgu = $baglan->prepare("SELECT * FROM urunler ORDER BY id ASC");
                    $formSorgu->execute();
              
                    while ($kullanici = $formSorgu->fetch(PDO::FETCH_ASSOC)) {
                    ?>
        <div class="product">
          <picture>
            <img src="image/<?php echo $kullanici['urunfoto2']?>" alt="">
          </picture>
          <div class="detail">
            <p>
              <b> <?php echo $kullanici['urunadi']?></b><br>
              <small> <?php echo $kullanici['urunKategorisi']?></small>
            </p>
            <samp><?php echo $kullanici['fiyat']?>TL</samp>
          </div>
          <div class="button">
            
            <a href="urungorunum.php?id=<?php echo $kullanici['id']?>">Ürün</a>
          </div>
        </div>
        <?php }?>
       
      </div>
      
             
      
    </main>

    <div class="anasayfaalt">
      <div class="container p-4">
        <div class="row">
          <div class=" anasayfaaltsol col-lg-6 col-md-12 mb-4 mb-md-0"> 
            <p>Tüm Ürünlerde</p>
            <p> <span style="text-decoration: underline;"> KAZAN </span></p>
            <p>  Koduyla <span> 100TL</span></p>
            <p class="anasayfaaltsolindirim"> İNDİRİM </p>
          </div>
          <div class=" anasayfaaltsag col-lg-6 col-md-12 mb-4 mb-md-0">
            <p>Hemen Alışverişe</p> 
    
            <p class="anasayfaaltsagbasla"> <a href=""> BAŞLA</a></p>
          </div>
        </div>
      </div>
    </div>

   


    <?php
    include ("footer.php");
    ?>
    
    <script src="script.js"></script>
    
  </body>
</html>
<?php 
?>


 <?php
 session_start();
 include("../adminpanel/connect.php")?>

<!DOCTYPE html>
<html lang="en">
  <?php include("../header2.php")?>
  <body style="font-family: 'News Cycle', sans-serif;">
   <?php include("../nav2.php")?>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <h1 style="margin-left: 15px;">Favorilerim</h1> <br><br>
        <hr>
        <?php
        
 
      

       
          
        $favurun = $baglan->prepare("SELECT * from favoriler where musteriid = '{$kullaniciid}' ");
        $favurun->execute();
        while($urunu =$favurun->fetch(PDO::FETCH_ASSOC)){

          $favurunid = $urunu['urunid'];


          $urunbilgi = $baglan->prepare("SELECT * FROM urunler where id = '{$favurunid}' "); 
          $urunbilgi->execute();
          if ($urun =$urunbilgi->fetch(PDO::FETCH_ASSOC)) {
              $urunid  = $urun['id'];
              $urunadi = $urun['urunadi'];
              $urunbilgiler = $urun['urunbilgileri'];
              $urunkategori = $urun['urunKategorisi'];
              $urunfoto = $urun['urunfoto2'];
              $urunfiyat = $urun['fiyat'];
      
      
          }
      

          
        ?>
        <div style="margin: 15px;" class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            
            <div
              class="card"
              style="
                width: 18rem;
                display: block;
                margin: auto;
                border: 1px solid #000;
              "
            >
              <img src="../image/<?php  echo $urunfoto?>" class="card-img-top" alt="..." />
              <div class="card-body">

                <h5 class="card-title"><?php echo $urunadi?>   </h5>
                <p class="card-text"><?php echo $urunkategori   ?>   </p> 
                
                <samp class="indirim"></samp>
                <samp><?php echo $urunfiyat?>TL</samp>
                <div  class="button">
                  <a href="../urungorunum.php?id=<?php echo $urunu['urunid']?>" class="btn">Ürün</a>
                  <form method="post" action="../adminpanel/frondend.php">
                  <input type="hidden" value="<?php echo $urunid?>"  name="urunid"> <input type="hidden" name="SepetEkle"> <input type="hidden" value="<?php echo $kullaniciid?>" name="kullaniciid">
                  <button type="submit" href="" class="btn btn-black">Sepete Ekle</button>
                  </form>
                  
                </div>
                <a  class="silmeislemi" style="color: #db0000;" href="../favsil.php?id=<?php echo $urunu['id']?>"> Sil</a>
              </div>
            </div>
        </div>

        <?php }?>

        
      </div>
    </div>

  <?php include("../footer2.php")?>
    <script src="../script.js"></script>
  </body>
</html>

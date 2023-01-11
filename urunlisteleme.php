<?php
   session_start(); 
  include ("adminpanel/connect.php");

?>
<!DOCTYPE html>
<html lang="tr">
<?php
include ("header.php");

?>
  <body   style="font-family: 'News Cycle', sans-serif;">
<?php
if (isset($_SESSION['giris'])) {
   
 include ("navbar.php");
$id = $_GET['id'];
$urunlisteleme = $baglan->prepare("SELECT * from Kategoriler where id=? limit 1");
$urunlisteleme->execute([$id]);
$urunyazdir = $urunlisteleme->fetch(PDO::FETCH_ASSOC);
$anaurun = $urunyazdir['AnaKategori'];
$alturun = $urunyazdir['AltKategori'];
$urunsayma = $urunlisteleme->rowCount();
if ($urunsayma > 0) {
    ?>
<div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div  style="padding: 20px;" class="row mt-3">
        <h1><?php echo $urunyazdir['AnaKategori']  ." , " .$urunyazdir['AltKategori']  ." Ürünleri" ?></h1> <br><br>
        <hr>
        <?php $urungosterme = $baglan->prepare("SELECT * from urunler where urunKategorisi= '{$anaurun} ' and ( urunKategorisi1 = '{$alturun}' or urunKategorisi2= '{$alturun}')");
                $urungosterme->execute();
                while ($urun = $urungosterme->fetch(PDO::FETCH_ASSOC)) {
                    # code...
                
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
              <img src="image/<?php echo $urun['urunfoto2']?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?php echo $urun['urunadi']?> <form   action="adminpanel/frondend.php" method="post"> <input type="hidden"  name="urunid"   value="<?php echo $urun['id']?>"> <input type="hidden" name="favoriler">  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid?>">  <button style="float: right;" class="btn btn-black"  type="submit"><i class="fa-regular fa-heart"></i></button></form> </h5>
                <p class="card-text"><?php echo $urun['urunKategorisi']?>  </p> 
                
                <samp class="indirim"></samp>
                <samp><?php echo $urun['fiyat']?>TL</samp>
                <div class="button">
                  <a href="urungorunum.php?id=<?php echo $urun['id']?>" class="btn">Ürün</a>
                  <form method="post" action="adminpanel/frondend.php">
                  <input type="hidden" value="<?php echo $urun['id']?>"  name="urunid"> <input type="hidden" name="SepetEkle"> <input type="hidden" value="<?php echo $kullaniciid?>" name="kullaniciid">
                  <button type="submit" href="" class="btn btn-black">Sepete Ekle</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
</div>



<?php  } }else {
    include ("navbar.php");
  
?>

    
 
    <?php
}
    include ("footer.php");
    ?>
    
    <script src="script.js"></script>
    
  </body>
</html>
<?php 
?>
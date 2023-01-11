 
 <!DOCTYPE html>
<html lang="tr">
<?php 
session_start();
include("adminpanel/connect.php");
include ("header.php");
?>
<link rel="stylesheet" href="urun/adminlte.min.css">
<link rel="stylesheet" href="urun/all.min.css">
</head>
<body  style="font-family: 'News Cycle', sans-serif;" >

<?php
if (isset($_SESSION['giris'])) {
    # code...

include("navbar.php");

$id = $_GET['id'];




$urunbilgi = $baglan->prepare("SELECT * From urunler where id= ? LIMIT 1");
 $urunbilgi->execute([$id]);
 $row = $urunbilgi->fetch(PDO::FETCH_ASSOC);
 $urunsaydir = $urunbilgi->rowCount() ;
if ( $urunsaydir > 0) {


?>
 <!-- Main content -->
 
 
 <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3 class="d-inline-block d-sm-none"></h3>
        <div class="col-12">
          <img src="image/<?php echo $row['urunfoto2']?>" class="product-image" alt="Product Image">
        </div>
        <div class="col-12 product-image-thumbs">
          <div class="product-image-thumb active"><img src="image/<?php echo $row['urunfoto']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto2']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto3']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto4']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php  echo $row['urunfoto5']?>" alt="Product Image"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3"><?php echo $row['urunadi']?></h3>
        <p><?php echo $row['urunbilgileri']?></p>

        <hr>
    

        <h4 class="mt-3"> <small>Lütfen Birini Seçiniz</small></h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
            <span class="text-xl">S</span>
            <br>
            Small
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
            <span class="text-xl">M</span>
            <br>
            Medium
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
            <span class="text-xl">L</span>
            <br>
            Large
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
            <span class="text-xl">XL</span>
            <br>
            Xtra-Large
          </label>
        </div>

        <div class="bg-gray py-2 px-3 mt-4">
          <h2 class="mb-0">
           <?php echo $row['fiyat']?> TL
          </h2>
          <h4 class="mt-0">
            <small>Ex Tax: <?php echo $row['fiyat']?> TL </small>
          </h4>
        </div>
        <form action="adminpanel/frondend.php" method="post">
        <div class="mt-4">
                 <button class="btn btn-primary btn-lg btn-flat">
            <i class="fas fa-cart-plus fa-lg mr-2"></i>
            Sepete Ekle
            </button>
          </div>
          <input type="hidden" value="<?php echo $row['id']?>"  name="urunid"> <input type="hidden" name="SepetEkle"> <input type="hidden" value="<?php echo $kullaniciid?>" name="kullaniciid">
          </form>
          <form action="adminpanel/frondend.php" method="post">
          <div class="mt-4">
            <input type="hidden" value="<?php echo $row['id']?>"  name="urunid"> <input type="hidden" name="favoriler"> <input type="hidden" value="<?php echo $kullaniciid?>" name="kullaniciid">
         
            
            
            <button class="btn btn-default btn-lg btn-flat" type="submit"  ><i class="fas fa-heart fa-lg mr-2"></i>
            Favorilere Ekle</button>
            </div>
          
          </form>
        
        </div>

   

      </div>
    </div>
   
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
<?php }?>

<?php 

}  else { 
  include("navbar.php");
  ?>
  

 <!-- Main content -->
 <?php
 
 $id = $_GET['id'];


  # code...



$urunbilgi = $baglan->prepare("SELECT * From urunler where id= ? LIMIT 1");
 $urunbilgi->execute([$id]);
 $row = $urunbilgi->fetch(PDO::FETCH_ASSOC);
 $urunsaydir = $urunbilgi->rowCount() ;
if ( $urunsaydir > 0) {


?>
 <!-- Main content -->
 
 
 <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3 class="d-inline-block d-sm-none"></h3>
        <div class="col-12">
          <img src="image/<?php echo $row['urunfoto2']?>" class="product-image" alt="Product Image">
        </div>
        <div class="col-12 product-image-thumbs">
          <div class="product-image-thumb active"><img src="image/<?php echo $row['urunfoto']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto2']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto3']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php echo  $row['urunfoto4']?>" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="image/<?php  echo $row['urunfoto5']?>" alt="Product Image"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3"><?php echo $row['urunadi']?></h3>
        <p><?php echo $row['urunbilgileri']?></p>

        <hr>
    

        <h4 class="mt-3"> <small>Lütfen Birini Seçiniz</small></h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
            <span class="text-xl">S</span>
            <br>
            Small
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
            <span class="text-xl">M</span>
            <br>
            Medium
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
            <span class="text-xl">L</span>
            <br>
            Large
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
            <span class="text-xl">XL</span>
            <br>
            Xtra-Large
          </label>
        </div>

        <div class="bg-gray py-2 px-3 mt-4">
          <h2 class="mb-0">
           <?php echo $row['fiyat']?>TL
          </h2>
          <h4 class="mt-0">
            <small>Ex Tax: <?php echo $row['fiyat']?>TL </small>
          </h4>
        </div>

        <div class="mt-4">
          <div class="btn btn-primary btn-lg btn-flat">
            <a href="giris_yap/">
            <i class="fas fa-cart-plus fa-lg mr-2"></i>
            Sepete Ekle
            </a>
          </div>

          <div class="btn btn-default btn-lg btn-flat">
            <a href="giris_yap/">
            <i class="fas fa-heart fa-lg mr-2"></i>
            Favorilere Ekle
            </a>
          </div>
        </div>

   

      </div>
    </div>
   
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
<?php }?>

<?php }   
include ("footer.php"); ?>

<script src="urun/adminlte.min.js"></script>
<script src="urun/bootstrap.bundle.min.js"></script>

<script src="urun/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
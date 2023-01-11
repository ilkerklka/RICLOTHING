
<!DOCTYPE html>
<html lang="tr">
<?php 
session_start();
error_reporting(0);
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
    # code...

include("navbar.php");
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sisteme Kayıtlı Ürünler</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Ürün Numarası </th>
                    <th>Ürün Adı</th>
                    <th>Ürün Katogerisi</th>
                    <th>Ürün Bilgileri</th>
                    <th>Ürün Bedenleri</th>
                    <th>Fiyat</th>
                    <th>Fotoğraflar</th>
                    <th>Ürüne Git</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $formSorgu = $baglan->prepare("SELECT * FROM urunler ORDER BY id ASC");
                    $formSorgu->execute();
              
                    while ($kullanici = $formSorgu->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                  <tr>
                    <td><?php echo $kullanici['id']?></td>
                    <td>
                        <?php echo $kullanici['urunadi']?>
                    </td>
                    <td> <?php echo $kullanici['urunKategorisi'] ."," .$kullanici['urunKategorisi1'] ."," .$kullanici['urunKategorisi2']?></td>
                    <td>  <?php echo $kullanici['urunbilgileri']?></td>
                    <td> S beden stok : <?php echo $kullanici['s']?><br>
                    M beden stok : <?php echo $kullanici['m']?><br>
                    L beden stok : <?php echo $kullanici['l']?><br>
                    XL beden stok : <?php echo $kullanici['xl']?><br></td>
                    <td><?php echo $kullanici['fiyat']?></td>
                    <td> <?php echo $kullanici['urunfoto'] .","  .$kullanici['urunfoto1'] .","  .$kullanici['urunfoto2']
                    .","  .$kullanici['urunfoto3'] .","  .$kullanici['urunfoto4'] .","  .$kullanici['urunfoto5']?></td>
                    <td><a href="../urungorunum.php?id=<?php echo $kullanici['id']?>">Tıkla</a></td>
                  </tr>

                  <?php } ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Ürün Numarası </th>
                    <th>Ürün Adı</th>
                    <th>Ürün Katogerisi</th>
                    <th>Ürün Bilgileri</th>
                    <th>Ürün Bedenleri</th>
                    <th>Fiyat</th>
                    <th>Fotoğraflar</th>
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
<h3>Yeni Ürün Oluşturma</h3>
<hr>
    <form class="girisyapform  " action="frondend.php" name="contactForm" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="urunekle">

        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Ürün Adı</label>
            <input type="text" name="urunad" class="form-control" id="isim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText2" class="form-label">Ana Kategori</label>
            <select type="text" name="anakategori" class="form-control" id="soyisim" required>
            <?php
            $urunkategorisecme = $baglan->prepare("SELECT DISTINCT AnaKategori from Kategoriler order by id asc");
            $urunkategorisecme->execute();
            while ($urun = $urunkategorisecme->fetch(PDO::FETCH_ASSOC)) { 
              $kategorikontrol = $urun['AnaKategori']
            ?>  
            <option value="<?php echo $urun['AnaKategori']?>"><?php echo $urun['AnaKategori']?></option>
            <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Kategori 2</label>
            <select type="text" name="altkategori" class="form-control" id="DogumTarihi" required>
              <?php $alturun = $baglan->prepare("SELECT distinct AltKategori from Kategoriler ");
                    $alturun->execute();
                    while ($alt = $alturun->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $alt['AltKategori']?>"><?php echo $alt['AltKategori']?></option>
              <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Kategori 3</label>
            <select type="text" name="altkategori2" class="form-control" id="DogumTarihi" required>
              <?php $alturun = $baglan->prepare("SELECT distinct AltKategori from Kategoriler ");
                    $alturun->execute();
                    while ($alt = $alturun->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $alt['AltKategori']?>"><?php echo $alt['AltKategori']?></option>
              <?php }?>
            </select>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Ürün Bilgileri</label>
          <textarea type="text" name="urunbilgi" class="form-control" id="Mail" aria-describedby="emailHelp" required></textarea>
        </div>
        
        <div class="mb-3  ">
        
            <label for="exampleInputText3" class="form-label">Ürün Stok Bilgileri </label><br>
            S :<input type="text" name="Sbeden" class="form-control" id="DogumTarihi" required>
            M :<input type="text" name="Mbeden" class="form-control" id="DogumTarihi" required>
            L :<input type="text" name="Lbeden" class="form-control" id="DogumTarihi" required>
            XL :<input type="text" name="XLbeden" class="form-control" id="DogumTarihi" required>
        </div>
          
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fiyat</label>
          <input type="number" name="Fiyat" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">1. Fotoğraf</label>
          <input type="file" name="urunfoto" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">2. Fotoğraf</label>
          <input type="file" name="urunfoto1" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">3. Fotoğraf</label>
          <input type="file" name="urunfoto2" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">4. Fotoğraf</label>
          <input type="file" name="urunfoto3" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">5. Fotoğraf</label>
          <input type="file" name="urunfoto4" class="form-control" id="Sifre" required>
        </div>
       
        
        <button type="submit" class="btn btn-dark">Ekle</button> <br>
       
      </form>
      </div>

<?php 
include ("footer.php");
}  
?>

<script src="script.js"></script>
</body>
</html>
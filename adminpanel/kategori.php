
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
    <link rel="stylesheet" href="tablo/all.min.css">
</head>
<body >

<?php
if (isset($_SESSION['admin'])) {
    # code...

include("navbar.php");
?>
<!-- /.card -->
<?php $urunkategori = $baglan->prepare("SELECT distinct AnaKategori from Kategoriler order by id asc");
      $urunkategori->execute();
      while ($urun = $urunkategori->fetch(PDO::FETCH_ASSOC)) {
        $urunkateg = $urun['AnaKategori'];
      
?>
<div class="card " style="margin: 50px 300px;">
            <div class="card-header" style="background-color: #DB0000; color: white; ">
              <h3 class="card-title"><?php echo $urun['AnaKategori']?></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th><?php echo $urun['AnaKategori']?></th>
                    
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $alturun = $baglan->prepare("SELECT * from Kategoriler where AnaKategori ='{$urunkateg}' ");
                $alturun->execute();
                while ($urunalt = $alturun->fetch(PDO::FETCH_ASSOC)) {
                  # code...
                ?>
                  <tr>
                    <td><?php echo $urunalt['AltKategori']?></td>
                    
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                    <?php }?>
                  

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
<?php 
      }
include ("footer.php");
}  
?>

<script src="script.js"></script>
<script src="tablo/adminlte.min.js"></script>
<script src="tablo/bootstrap.bundle.min.js"></script>
<script src="tablo/jquery.min.js"></script>
</body>
</html>
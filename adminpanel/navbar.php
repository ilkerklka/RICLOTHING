<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RICLOTHING Admin Paneli</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="anasayfa.php">Ana Sayfa</a>
        </li>
        <?php 
        if ($adminlevel == 3) {
          # code...
        ?>
        
        <li class="nav-item">
          <a class="nav-link" href="urun.php">Ürünler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kullanici.php">Kullanıcılar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="siparis.php"
            >Siparişler</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" style="color: #DB0000;"
            >Çıkış</a
          >
        </li>
        <?php } elseif ($adminlevel == 2) {?>
          <li class="nav-item">
          <a class="nav-link" href="urun.php">Ürünler</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link disabled " href="kullanici.php">Kullanıcılar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="siparis.php"
            >Siparişler</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" style="color: #DB0000;"
            >Çıkış</a
          >
        <?php } elseif ($adminlevel == 1) { ?>
          <li class="nav-item ">
          <a class="nav-link disabled" href="urun.php">Ürünler</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link disabled " href="kullanici.php">Kullanıcılar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="siparis.php"
            >Siparişler</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" style="color: #DB0000;"
            >Çıkış</a
          >
        <?php }else {?>
          <li class="nav-item">
          <a class="nav-link " href=""
            >HATALI KULLANICI</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link " href="logout.php" style="color: #DB0000;"
            >Çıkış</a
          >
        <?php } ?>
        
      </ul>
    </div>
    <div class="d-flex align-items-center">
      <ul class="navbar-nav">
    <li class="nav-item">
          <a class="nav-link disabled" 
            >Hoşgeldin : <?php echo "$adminisim"?></a
          >
        </li>
        </ul>
    </div>
  </div>
</nav>
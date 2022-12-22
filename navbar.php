<!-- Header -->
<nav class="arkarenk">
  <div class="headerduzen">
    <p>Seçili ürünlerde %50'ye varan indirimleri kaçırma!!</p>

  </div>
</nav>
<!-- header -->

<!-- Navbar -->
<!-- Navbar -->
<nav class=" navbar navbar-expand-lg navbar-dark bg-black sticky-top" style="z-index: 1; margin-top: -18px">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse menuduzen" id="navbarSupportedContent">
      <!-- Navbar brand -->

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="Fotograflar/RICLOTHİNGbeyaz.png" height="70" alt="MDB Logo" loading="lazy" />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <div class="menu">
            Erkek
            <ul class="drop">
              <li><a href="#">Ayakkabı</a></li>
              <li><a href="#">Giyim</a></li>
              <li><a href="#">Aksesuarlar</a></li>
              <li><a href="#">Spor </a></li>
              <li><a href="#" style="color: #db0000">İndirimler</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="menu">
            Kadın
            <ul class="drop">
              <li><a href="#">Ayakkabı</a></li>
              <li><a href="#">Giyim</a></li>
              <li><a href="#">Aksesuarlar</a></li>
              <li><a href="#">Spor </a></li>
              <li><a href="#" style="color: #db0000">İndirimler</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="menu">
            Çocuk
            <ul class="drop">
              <li><a href="#">Genç(8-14)</a></li>
              <li><a href="#">Çocuk(4-8)</a></li>
              <li><a href="#">Bebek(0-4)</a></li>
              <li><a href="#" style="color: #db0000">İndirimler</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="menu">
            Spor
            <ul class="drop">
              <li><a href="#">Futbol</a></li>
              <li><a href="#">Basketbol</a></li>
              <li><a href="#">Koşu</a></li>
              <li><a href="#">Training</a></li>
              <li><a href="#">Diğer</a></li>
              <li><a href="#" style="color: #db0000">İndirimler</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="menu">
            Markalar
            <ul class="drop">
              <li><a href="#">Black&White</a></li>
              <li><a href="#">Wint</a></li>
              <li><a href="#">RISUM</a></li>
              <li><a href="#">Collage</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="menu">
            <a style="color: #db0000"> İndirimler</a>
          </div>
        </li>
      </ul>

      <!-- Left links -->

      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <div class="sagnavbarayar">
          <form class="d-flex input-group w-auto arama">
            <input type="search" class=" " placeholder="Arama" aria-label="Search" aria-describedby="search-addon" />
          </form>
        </div>
      </div>
    </div>
    <!-- rightnavbar -->
    <div class="container-fluid ikon">
      <ul class="navbar-nav d-flex flex-row">
        <!-- Icons -->
        <li class="nav-item me-3 me-lg-0">
          <a class="text-reset me-3" href="favoriler/" style="color: white">
            <i class="fa-regular fa-heart"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" style="color: white">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
        </li>
        <?php
        if (isset($_SESSION['giris'])) { ?>
          <li class="nav-item me-3 me-lg-0">
            <a class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#exampleModal-10000" href="" style="color: white">
              <i class="fa-regular fa-user"></i>
            </a>
          </li>




        <?php
        } else {
        ?>
          <li class="nav-item me-3 me-lg-0">
            <a class="text-reset me-3" href="giris_yap/" style="color: white">
              <i class="fa-regular fa-user"></i>
            </a>
          </li>

        <?php
        }
        ?>



      </ul>
    </div>

    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>

<?php

if (isset($_SESSION['giris'])) {
?>
  <!-- SEPETİM -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sepetim</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card" style="width: 18rem; display: block; margin: auto; border: 1px solid #000;">
            <img src="image/banner1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Spor Ceket</h5>
              <p class="card-text">Erkek</p>
              <samp class="indirim">$55.00</samp>
              <samp>$45.00</samp>
              <div class="button">
                <a href="#" class="btn">Ürün</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="container sonfiyat">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <p> <span> Fiyatı Toplamı </span> = $45.00</p>


            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              İndirim Kodunuz Varsa :
              <form class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
                <input type="text">
                <button type="button" style="display: block; margin: auto;" class="btn btn-black"> Uygula</button>
              </form>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
          <button type="button" class="btn btn-black">Alışverişi Tamamla</button>
        </div>
      </div>
    </div>
  </div>
  <!-- SEPETİM -->
  <!-- GİRİŞ YAP -->
  <div class="modal fade" id="exampleModal-10000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Profil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="profilduzen modal-body">
          <h2>Detaylar</h2>
          <p><?php echo $kullaniciadi . " " . $kullanicisoyadi ?></p>
          <p><?php echo $kullanicidogumtarihi ?></p>
          <p><?php echo $kullanicicinsiyet ?></p>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal-20000" href="">Düzenle</a>

          <hr>
          <h2>Adreslerim</h2>

          <?php
          $adreslistele = $baglan->prepare("SELECT * from adres  where kullaniciid = ? ");
          $adreslistele->execute([$kullaniciid]);

          while ($adresyazma = $adreslistele->fetch(PDO::FETCH_ASSOC)) {

           
          ?>
            <p><b><?php echo $adresyazma['adresbasligi'] ?> </b><a data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $adresyazma['id'] ?> " href="" > Görüntüle</a></p>

            <div class="modal fade" id="exampleModal-<? echo $adresyazma['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adres Görüntüle</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="profilduzen modal-body">
                    <form method="POST" action="" class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
                      <div class="form-outline mb-4">
                        <label class="form-label" for="isim">İsim</label><br>

                        <input class="" disabled name="" type="text" placeholder="<?php echo $adresyazma['isim'] ?>"> <br>


                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="Soyisim">Soyisim</label><br>
                        <input class="" disabled name="" type="text" placeholder="<?php echo $adresyazma['soyisim'] ?>"><br>
                      </div>
                      <div class="mb-4 form-outline  ">
                        <label class="form-label" for="Soyisim">Adres Başlığı</label><br>
                        <input class="" disabled name="" placeholder="<?php echo $adresyazma['adresbaslgi'] ?>" type="text"><br>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="Soyisim">Telefon Numarası</label><br>
                        <input class="" disabled name="" placeholder="<?php echo $adresyazma['telefon'] ?>" type="tel"><br>
                      </div>
                      <div class="mb-4 form-outline  ">
                        <label class="form-label" for="Soyisim">İl</label><br>
                        <input class="" disabled name="" placeholder="<?php echo $adresyazma['il'] ?>" type="text"><br>
                      </div>
                      <div class="mb-4 form-outline  ">
                        <label class="form-label" for="Soyisim">İlçe</label><br>
                        <input class="" disabled name="" placeholder="<?php echo $adresyazma['ilce'] ?>" type="text"><br>
                      </div>
                      <div class="mb-4 form-outline  ">
                        <label class="form-label" for="Soyisim">Mahalle</label><br>
                        <input class="" disabled name="" placeholder="<?php echo $adresyazma['mahalle'] ?>" type="text"><br>
                      </div>
                      <div class="mb-4 form-outline  ">
                        <label class="form-label" for="Soyisim">Açık Adres</label><br>
                        <textarea class="" disabled placeholder="<?php echo $adresyazma['tamadres'] ?>" name="tamadres" type="text"></textarea><br>
                      </div>
                  </div>
                  <input class="" name="adkullaniciid" value="<?php echo "$kullaniciid" ?>" type="hidden">
                  <button type="submit" class="btn btn-block btn-black">Güncelle </button>

                  </form>
                </div>






                <button type="button" class="btn btn-danger btn-block " data-bs-dismiss="modal">Kapat</button>

              </div>
            </div>
      

      <?php
          }
      ?>
      <a data-bs-toggle="modal" data-bs-target="#exampleModal-40000 " href="">Adres Ekle</a>
      <hr>
      <h2>Giriş Detayları</h2>
      <p><?php echo $kullanicimail ?></p>
      <p><?php echo $kullanicisifre ?></p>
      <a data-bs-toggle="modal" data-bs-target="#exampleModal-30000 " href="">Düzenle</a>
      <a style="float: right;" href="logout.php">Çıkış Yap</a>
      </div>


      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>

    </div>
  </div>
  </div>
  </div>
  <!-- GİRİŞ YAP -->
  <!-- DETAYLAR -->
  <div class="modal fade" id="exampleModal-20000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detaylar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="profilduzen modal-body">
          <form method="POST" action="adminpanel/frondend.php" class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
            <div class="form-outline mb-4">
              <label class="form-label" for="isim">İsim</label><br>

              <input class="" name="isim" type="text" placeholder="<?php echo "$kullaniciadi" ?>"> <br>


            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Soyisim</label><br>
              <input class="" name="Soyisim" type="text" placeholder="<?php echo "$kullanicisoyadi" ?>"><br>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Dogum Tarihiniz</label><br>
              <input class="" name="Dogumtarihi" type="date"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label for="exampleInputCinsiyet1" class="form-label">Cinsiyetiniz</label> <br>
              <div class="container cinsiyet">
                <input type="radio" name="erkek" value="ERKEK" id="erkek">
                <label for="erkek" class="form-label">Erkek</label>
                <input type="radio" name="erkek" value="KADIN" id="kadın">
                <label for="kadın" class="form-label">Kadın</label>
              </div>
            </div>
            <input class="" name="kullaniciid" value="<?php echo "$kullaniciid" ?>" type="hidden">
            <input class="" name="detayguncelle"  type="hidden">
            <button type="submit" class="btn btn-block btn-black">Güncelle </button>

          </form>
        </div>






        <button type="button" class="btn btn-danger btn-block " data-bs-dismiss="modal">Kapat</button>

      </div>
    </div>
  </div>

  <!-- DETAYLAR -->
  <!-- GÜVENLİKAYAR -->
  <div class="modal fade" id="exampleModal-30000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Giriş Detayları</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="profilduzen modal-body">

          <form method="POST" action="adminpanel/frondend.php" class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
            <div class="form-outline mb-4">
              <label class="form-label" for="isim">Mail</label><br>

              <input class="" name="mailgiris" type="mail" placeholder="<?php echo "$kullanicimail" ?>"> <br>


            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Eski Şifre</label><br>
              <input class="" name="sifregiriseski" type="text" placeholder="" required><br>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Yeni Şifre</label><br>
              <input class="" name="sifregirisyeni" type="text" placeholder="" required><br>
            </div>
            <input class="" name="kullaniciid2" value="<?php echo "$kullaniciid" ?>" type="hidden">
            <input class="" name="eskisfirrr" value="<?php echo "$kullanicisifre" ?>" type="hidden">
            <input class="" name="güvenlikayar"  type="hidden">
            <button type="submit" class="btn btn-block btn-black">Güncelle </button>

          </form>
        </div>






        <button type="button" class="btn btn-danger btn-block " data-bs-dismiss="modal">Kapat</button>

      </div>
    </div>
  </div>
  <!-- GÜVENLİKAYAR -->
  <!--ADRES EKLE-->
  <div class="modal fade" id="exampleModal-40000" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Adres Ekle</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="profilduzen modal-body">
          <form method="POST" action="adminpanel/frondend.php" class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
            <div class="form-outline mb-4">
              <label class="form-label" for="isim">İsim</label><br>

              <input class="" name="isimadres" type="text" placeholder="<?php echo "$kullaniciadi" ?>"> <br>


            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Soyisim</label><br>
              <input class="" name="Soyisimadres" type="text" placeholder="<?php echo "$kullanicisoyadi" ?>"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label class="form-label" for="Soyisim">Adres Başlığı</label><br>
              <input class="" name="adresbas" type="text"><br>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Telefon Numarası</label><br>
              <input class="" name="telefon" type="tel"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label class="form-label" for="Soyisim">İl</label><br>
              <input class="" name="il" type="text"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label class="form-label" for="Soyisim">İlçe</label><br>
              <input class="" name="ilce" type="text"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label class="form-label" for="Soyisim">Mahalle</label><br>
              <input class="" name="mahalle" type="text"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label class="form-label" for="Soyisim">Açık Adres</label><br>
              <textarea class="" name="tamadres" type="text"></textarea><br>
            </div>
        </div>
        <input class="" name="adkullaniciid" value="<?php echo "$kullaniciid" ?>" type="hidden">
        <input class="" name="adresekle"  type="hidden">
        <button type="submit" class="btn btn-block btn-black">Ekle </button>

        </form>
      </div>






      <button type="button" class="btn btn-danger btn-block " data-bs-dismiss="modal">Kapat</button>

    </div>
  </div>
  </div>
  <!-- ADRES EKLE

<?php } ?>
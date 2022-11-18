
<?php

session_start(); ob_start();

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RI CLOTHING</title>
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="style.css" />
    <!--ANİMATE-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!--ANİMATE-->
    <!--favicon-->
    <link rel="shortcut icon" href="RI-LOGO.ico" />
    <!--favicon-->
    <!--BOOSTRAP-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!--BOOSTRAP-->
    <script
      src="https://kit.fontawesome.com/371afa92ba.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      rel="stylesheet"
    />
    <!--MDB-->

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        //sayfa açıldığında otomatik açılması için
		$("#modalNesne").modal('show');
	});
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=News+Cycle&display=swap" rel="stylesheet">
  </head>
  <body  style="font-family: 'News Cycle', sans-serif;">


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


    <!-- Header -->
    <nav class="arkarenk">
      <div class="headerduzen">
        <p>Seçili ürünlerde %50'ye varan indirimleri kaçırma!!</p>
        <?php 
    if (isset($_SESSION['kullanici'])) {
      echo'<p>giris var</p>'; 
    }
    ?>
      </div>
    </nav>
    <!-- header -->
  
    <!-- Navbar -->
    <!-- Navbar -->
    <nav
      class=" navbar navbar-expand-lg navbar-dark bg-black sticky-top"
      style="z-index: 1; margin-top: -18px"
    >
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div
          class="collapse navbar-collapse menuduzen"
          id="navbarSupportedContent"
        >
          <!-- Navbar brand -->

          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img src="Fotograflar/RICLOTHİNGbeyaz.png" height="70" alt="MDB Logo"
            loading="lazy" />
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
                <input
                  type="search"
                  class=" "
                  placeholder="Arama"
                  aria-label="Search"
                  aria-describedby="search-addon"
                />
              </form>
            </div>
          </div>
        </div>
        <!-- rightnavbar -->
        <div class="container-fluid ikon">
          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="text-reset me-3"  href="favoriler/" style="color: white">
                <i class="fa-regular fa-heart"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"  href="#" style="color: white">
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#exampleModal-1" href="" style="color: white">
                <i class="fa-regular fa-user"></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>

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
    </div >
   
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
            <button type="button" class="btn btn-black">Alışverişi Tamamla</button>
          </div>
        </div>
      </div>
    </div>

<!-- GİRİŞ YAP -->
    <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="profilduzen modal-body">
           <h2>Detaylar</h2>
          <p>İlker Kücükyılmaz</p>
          <p>24/10/2003</p>
          <p>Erkek</p>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal-2" href="">Düzenle</a>
       
          <hr>
          <h2>Adreslerim</h2>
          <p><b>Ev Adresim </b><a href=""> Düzenle</a></p>
          <p><b>İş Adresim</b> <a href="">Düzenle</a></p>
          <a href="">Adres Ekle</a>
          <hr>  
          <h2>Giriş Detayları</h2>
          <p>İkoculuk@gmail.com</p>
          <p>**********</p>
          <a href="">Düzenle</a>
          </div>
          
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>

        </div>
      </div>
    </div>
    </div>
    <!-- GİRİŞ YAP -->
<!-- DETAYLAR -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Detaylar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="profilduzen modal-body">
            <form class="indirimkodu" style="margin-bottom: 3px; padding: 5px;" action="">
              <div class="form-outline mb-4">
              <label class="form-label" for="isim">İsim</label><br>
              <input class="" name="isim" type="text"> <br>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Soyisim</label><br>
              <input class="" name="Soyisim" type="text"><br>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="Soyisim">Dogum Tarihiniz</label><br>
              <input class="" name="Soyisim" type="date"><br>
            </div>
            <div class="mb-4 form-outline  ">
              <label for="exampleInputCinsiyet1" class="form-label">Cinsiyetiniz</label> <br>
              <div class="container cinsiyet">
              <input type="radio"  name="erkek" id="erkek">
              <label for="erkek" class="form-label">Erkek</label>
              <input type="radio"  name="erkek" id="kadın">
              <label for="kadın" class="form-label">Kadın</label>
          </div>
          </div>
         
          <button type="button"  class="btn btn-block btn-black">Güncelle </button>
       
        </form>
        </div>
              
          
   
            <button type="button" class="btn btn-danger btn-block "  data-bs-dismiss="modal">Kapat</button>
        
        </div>
      </div>
    </div>
    
    <!-- DETAYLAR -->
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
        <div class="product">
          <picture>
            <img src="image/banner2.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Abiye Elbise</b><br>
              <small>Kadın</small>
            </p>
            <samp>$45.00</samp>
          </div>
          <div class="button">
            
            <a href="#">Ürün</a>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="image/banner1.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Spor Ceket</b><br>
              <small>Erkek</small>
            </p>
            <samp class="indirim">$55.00</samp>
                      <samp>$45.00</samp>
          </div>
          <div class="button">
          
            <a href="#">Ürün</a>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="image/banner3.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Ayakkabı</b><br>
              <small>Spor</small>
            </p>
            <samp>$65.00</samp>
          </div>
          <div class="button">
            
            <a href="#">Ürün</a>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="image/banner4.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Akıllı Saat</b><br>
              <small>Teknoloji</small>
            </p>
            <samp>$355.00</samp>
          </div>
          <div class="button">
            
            <a href="#">Ürün</a>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="image/watch.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Saat</b><br>
              <small>Aksesuar</small>
            </p>
            <samp>$2555.00</samp>
          </div>
          <div class="button">
          
            <a href="#">Ürün</a>
          </div>
        </div>
        <div class="product">
          <picture>
            <img src="image/delta.png" alt="">
          </picture>
          <div class="detail">
            <p>
              <b>Bot </b>><br>
              <small>Ayakkabı</small>
            </p>
            <samp>$45.00</samp>
          </div>
          <div class="button">
            
            <a href="#">Ürün</a>
          </div>
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

   


    <!-- Footer    -->
    <footer class="text-center text-lg-start bg-dark text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block text-light">
          <span style="opacity: 0.6">Sosyal medyadan bize ulaş:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div style="opacity: 0.6" class="text-light">
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div
              class="footerfoto text-light col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"
            >
              <!-- Content -->
              <img src="Fotograflar/RI LOGO.png" width="70px" alt="" />
              <hr />
              <img
                src="Fotograflar/RICLOTHING.png"
                width="100px"
                alt=""
              /><br /><br /><br />
              <p><b> "RI CLOTHING" </b> bir <b> "RI GROUP" </b> üyesidir</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Kurumsal</h6>
              <p>
                <a href="Hakkimizda/" class="text-reset">Hakkımızda</a>
              </p>
              <p>
                <a href="Kariyer/" class="text-reset">Kariyer</a>
              </p>
              <p></p>
            </div>

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Alışveriş</h6>
              <p>
                <a href="Gizlilik_Politikasi/" class="text-reset">Gizlilik Politikası</a>
              </p>
              <p>
                <a href="Satis_Sozlesmesi/" class="text-reset">Satış Sözleşmesi</a>
              </p>
              <p>
                <a href="Kayit_ol/" class="text-reset">Kayıt Ol</a>
              </p>
              <p>
                <a href="giris_yap/" class="text-reset">Giriş Yap</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">İletişim</h6>
              <p><i class="fas fa-home me-3"></i> İstanbul / İstinye TR</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="copyrightco text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2022 :
        <a class="text-reset fw-bold" href="#!">RICLOTHING Türkiye</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="script.js"></script>
    
  </body>
</html>

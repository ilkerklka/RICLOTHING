<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="../style.css" />
    <!--ANİMATE-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!--ANİMATE-->
    <!--favicon-->
    <link rel="shortcut icon" href="../RI-LOGO.ico" />
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
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
      rel="stylesheet"
    />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>
    <title>RI Kariyer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=News+Cycle&display=swap" rel="stylesheet">
  </head>
  <body style=" font-family: 'News Cycle', sans-serif;">
    <nav class="hakkimiznav navbar bg-white sticky-top">
      <div class="container justify-content-center">
        <a class="navbar-brand" href="../index.html">
          <img src="../Fotograflar/RI LOGO.png" alt="Bootstrap" width="40" />
        </a>
      </div>
    </nav>

    <div class="container">
      <div class="dunya row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <img src="world.jpg" width="600px" alt="" />
        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <div class="dunyayazi">
            <p class="bas">DÜNYAYI KURTAR  DÜNYAYI GELİŞTİR</p>
            <p class="tex">
              Dünyayı Kurtarırken aynı zamanda gelecek nesiller için çalışıyoruz
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="ofis row">
            <div class="  col-lg-6 col-md-12 mb-4 mb-md-0">
                <img src="ofis.jpg" width="700px" alt="" />
              </div>
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <div class="dunyayazi2">
                <p class="bas2">KARİYERİNE ODAKLAN</p>
                <p class="tex2">
                  Yeni Bir Kariyere başlamanın tam zamanı
                </p>
              </div>
            
          </div>
          
        </div>
      </div>

      <div  class="card bg-dark text-white">
        <img src="basvuru.jpg" style="opacity: 30%;"  height="850px"  class="card-img" alt="...">
        <div class="card-img-overlay">
            <h1 style="text-align: center;">Hemen Başvur</h1>
            <form class="basvurform  ">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Adınız</label>
                    <input type="text" class="form-control" id="isim" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText2" class="form-label">Soyadınız</label>
                    <input type="text" class="form-control" id="soyisim" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText3" class="form-label">Doğum Tarihiniz</label>
                    <input type="date" class="form-control" id="DogumTarihi" required>
                </div>
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Mail Adresiniz</label>
                  <input type="email" class="form-control" id="Mail" aria-describedby="emailHelp" required>
                </div>
                
                <div class="mb-3  ">
                    <label for="exampleInputCinsiyet1" class="form-label">Cinsiyetiniz</label> <br>
                    <div class="container cinsiyet">
                    <input type="radio"  name="erkek" id="erkek">
                    <label for="erkek" class="form-label">Erkek</label>
                    <input type="radio"  name="erkek" id="kadın">
                    <label for="kadın" class="form-label">Kadın</label>
                </div>
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Yaşadığınız Şehir</label>
                  <input type="text" class="form-control" id="sehir" required>

                </div>

            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Okuduğunuz Üniversite</label>
                <input type="text" class="form-control" id="okuduguuni" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputText2" class="form-label">Okuduğunuz Bölüm</label>
                <input type="text" class="form-control" id="okuugubolum" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Hangi Dalda Başvurmak İstiyorsunuz (Web Tasarım,Grafik Tasarım vb) </label>
                <input type="text" class="form-control" id="dal" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputText2" class="form-label">İş tecrübeniz</label>
               <textarea class="form-control" required placeholder="Çalıştığınız şirketler ve çalıştığınız bölüm hakkında kısa bir bigi" id="tecrube"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">GitHub Adresiniz</label>
                <input type="text" class="form-control" id="dal" required>
            </div>
                
            <button type="submit" class="btn btn-light">Başvur</button>
            </div>
            </div>
        </div>
         
              </form>
        </div>
      </div>
      <footer class="bg-light">
        <div
        class="copyrightco text-center p-3"
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © 2022 :
        <a class="text-dark" href="#!">RI Türkiye İşe Alım Ofisi</a>
      </div>
      </footer>
      
  </body>
</html>






        

    
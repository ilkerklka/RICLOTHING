 <?php
    session_start();
    
    include("adminpanel/connect.php");
    ?>
 <!DOCTYPE html>
 <html lang="tr">
 <?php

    include("header.php");
    ?>
    <link rel="stylesheet" href="odeme.css">
    </head>


 <body style="font-family: 'News Cycle', sans-serif;">

     <?php

        include("navbar.php");
         ?>       


<?php if (isset($_SESSION['giris'])) {
           

           $kID = $_GET['id'];
           $urunlisteleme = $baglan->prepare("SELECT * from kullanicilar where id=? limit 1");
           $urunlisteleme->execute([$kID]);
           $urunyazdir = $urunlisteleme->fetch(PDO::FETCH_ASSOC);

           $urunsayma = $urunlisteleme->rowCount();
           if ($urunsayma > 0) {

       ?>


<div class="container">
          <div class="row">
            <div class="col-md-8" style="display: block; margin: auto; margin-top: 25px;">
              <table  class="table  table-hover table-bordered table-striped">
                  <thead>
                    <th class="text-center"> <strong> Ürün Resmi </strong></th>
                    <th class="text-center"> <strong> Ürünü Adı </strong></th>
                    <th class="text-center"> <strong> Fiyatı </strong></th>
                    
                  </thead>
                  <tbody>
          <?php
          
          $sepeturun = $baglan->prepare("SELECT * from sepet where kullaniciid = '{$kullaniciid}' ");
          $sepeturun->execute();
          $tutar = 0;
          while ($row = $sepeturun->fetch(PDO::FETCH_ASSOC)) {
           
            
            $sepeturunid = $row['urunid'];
          
            $urunbilgi = $baglan->prepare("SELECT * FROM urunler where id = '{$sepeturunid}' "); 
          $urunbilgi->execute();
          if ($urun =$urunbilgi->fetch(PDO::FETCH_ASSOC)) {
              $urunid  = $urun['id'];
              $urunadi = $urun['urunadi'];
              $urunbilgiler = $urun['urunbilgileri'];
              $urunkategori = $urun['urunKategorisi'];
              $urunfoto = $urun['urunfoto2'];
              $urunfiyat = $urun['fiyat'];
      
      
          }
          $tutar = $tutar + $urunfiyat;
          ?>
        
                  
                    <tr>
                      <td class="text-center" width="150">
                          <img src="image/<?php echo $urunfoto?>" width="50" alt="">
                      </td>
                      <td class="text-center">
                      <?php echo $urunadi?>
                      </td>
                      <td class="text-center">
                      <?php echo $urunfiyat?> TL
                      </td>
                      

                    </tr>
                    <?php }?>
                  </tbody>
              </table>
            </div>
          </div>
         </div>
       
        <div class="container sonfiyat">
          <div class="row">
            <div style="display: block; margin: auto;" class="col-md-8">
            <hr>
              <p> <span> Fiyatı Toplamı </span> = <?php echo $tutar?> TL</p>


            </div>

           
          </div>

        </div>

       <!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

This example is just for fun.
I realized it for the dailyui challenge
https://dailyui.co/

Fork it if you want, it's free, but I apreciate credits or a retweet

Enjoy :)

-->
<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front">
        <div class="chip"></div>
        <div class="logo">
          <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
            <g>
              <g>
                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                         h-3.888L19.153,16.8z" />
              </g>
            </g>
          </svg>
        </div>
        <div class="number"></div>
        <div class="card-holder">
          <label>Kart Sahibi</label>
          <div></div>
        </div>
        <div class="card-expiration-date">
          <label>Tarih</label>
          <div></div>
        </div>
      </div>
      <div class="back">
        <div class="strip"></div>
        <div class="logo">
          <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
            <g>
              <g>
                <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                         h-3.888L19.153,16.8z" />
              </g>
            </g>
          </svg>

        </div>
        <div class="ccv">
          <label>CCV</label>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <form class="form" method="post" autocomplete="off" novalidate>
    <fieldset>
      <label for="card-number">Kart Numarası</label>
      <input type="num" id="card-number" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
      <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
    </fieldset>
    <fieldset>
      <label for="card-holder">Kart Sahibi</label>
      <input type="text" name="Kartsahip" id="card-holder" />
    </fieldset>
    <fieldset class="fieldset-expiration">
      <label for="card-expiration-month">Son Kullanma Tarihi</label>
      <div class="select">
        <select id="card-expiration-month">
          <option></option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
      </div>
      <input type="hidden" value="<?php echo $kID?>">
      <input type="hidden" name="odeme">
      <div class="select">
        <select id="card-expiration-year">
          <option></option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
          <option>2029</option>
          <option>2030</option>
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="card-ccv">CCV</label>
      <input type="text" id="card-ccv" maxlength="3" />
    </fieldset>
    <button class="btn"><i class="fa fa-lock"></i> submit</button>
  </form>
</div>


        <?php 
        
      if ($_POST) {
         echo '<script>alert(" Siparişiniz Başarıyla ' .$_POST["Kartsahip"]   .' İsimli Karttan Alınmıştır Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz.  ");</script>';

      }
      
      }
       } else { ?>

<p>girmek</p>
    <?php } ?>
      
<?php
        include("footer.php");
        ?>




     <script src="script.js"></script>
     <script src="odeme.js"></script>
    
 </body>

 </html>
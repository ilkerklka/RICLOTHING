
<!DOCTYPE html>
<html lang="tr">
<?php 
include ("header.php");
?>
<body >

<div style="position: absolute ;
   top: 50%; left: 50%;
    transform: translate(-50%,-50%);">
    <h3 style="color: #DB0000; text-align: center;">RI CLOTHING</h3>
    <h5 style="text-align: center;">Yönetici Paneline Hoşgediniz</h5>
<form action="frondend.php" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="kullanici" type="text" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Kullanıcı Adı</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name="sifre" type="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Şifre</label>
  </div>

  <input name="admingiris"  type="hidden">

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block">Giriş Yap</button>
</form>
</div>


<script src="script.js"></script>
</body>
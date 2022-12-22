
<!DOCTYPE html>
<html lang="tr">
<?php 
session_start();
include("connect.php");
include ("header.php");
?>
<body >

<?php
if (isset($_SESSION['admin'])) {
    # code...

include("navbar.php");
?>

<?php 
include ("footer.php");
}  
?>

<script src="script.js"></script>
</body>
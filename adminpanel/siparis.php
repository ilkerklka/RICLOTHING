
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
</head>
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
</html>
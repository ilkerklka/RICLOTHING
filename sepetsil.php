<?php
include('adminpanel/connect.php');

    # code...

$id = $_GET['id'];
$delete = $baglan->prepare("DELETE from sepet  where  id = '$id' ");
$silme  = $delete->execute();
if ($delete) {
    header('location:index.php');
}

?>
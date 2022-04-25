<?php
require_once("db.php");
if(isset($_POST['dori_id']) && isset($_POST['soni']) && isset($_POST['narxi'])){
    $dori_id = $_POST['dori_id'];
    $soni = $_POST['soni'];
    $narxi = $_POST['narxi'];
    $jami_narxi = $soni * $narxi;

    $result = mysqli_query($link,"INSERT INTO `dori_sotish` (`id`, `dori_id`, `soni`, `jami_narxi`) VALUES (NULL, '$dori_id', '$soni', '$jami_narxi')");
    header("Location:services.php");
}

?>
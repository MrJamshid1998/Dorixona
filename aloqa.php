<?php
require_once('db.php');
if(isset($_POST['fio']) && isset($_POST['email']) && isset($_POST['xabar'])){
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $xabar = $_POST['xabar'];

    $result = mysqli_query($link, "INSERT INTO `aloqa` (`id`, `fio`, `email`, `xabar`) VALUES (NULL, '$fio', '$email', '$xabar')");
    if($result){
        echo("Bazaga yozildi.");
    }
    else{
        echo("Bazaga yozishda xatolik mavjud.");
    }
    header("Location:index.html");
}
?>
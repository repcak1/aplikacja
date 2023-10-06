 <?php
  
  $_COOKIE_name = "user";
  if(!isset($_COOKIE[$_COOKIE_name])){
echo "cookie named '". $_COOKIE_name . "' is not set!";
  } else {
    echo "cookie '" . $_COOKIE_name . "' is set!<br>";
    echo "value is:" . $_COOKIE[$_COOKIE_name];
  }
 ?>
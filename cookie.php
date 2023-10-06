 <?php
  $_COOKIE_name = "user";
  $_COOKIE_value = "john doe";
  setcookie($_COOKIE_name , $_COOKIE_value ,
  time() + (24*60*60) );
 ?>
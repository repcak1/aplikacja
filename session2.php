<?php 
session_start();

echo 'welcome to page #2<br>';

echo ' ulubiony kolor : '.$_SESSION['favcolor'];
echo 'ulubione zwierze: '.$_SESSION['animal'] .'<br>';
echo date('y m d h:i:s' , $_SESSION['time']) . '<br>';

 echo $_SESSION['bzdura'];
 ?>
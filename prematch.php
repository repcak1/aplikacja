 <?php
$wzorzec = '/byc/';
$tekst = "byc albo nie byc";
if( preg_match( $wzorzec,$tekst) )
echo "znaleziono wzorzec";
else 
echo "nie znalezniono wzorca";
echo "znaleziono: ". preg_match_all($wzorzec,$tekst);
 ?>


 <?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty ";
if( preg_match( $wzorzec,$tekst) )
echo "znaleziono cyfre";
else 
echo "nie znalezniono cyfre";
echo "znaleziono: ". preg_match_all($wzorzec,$tekst);
 ?>

 <?php
$wzorzec = '/\d{5}/';
$tekst = "telefon 532123452 ";
if( preg_match( $wzorzec,$tekst) )
echo "znaleziono liczbe";
else 
echo "nie znalezniono liczby ";
 
 ?>
 <?php
$wzorzec = '/\S*\.gif/i';
$tekst = " w pliku obrazek.gif jest ikona ";
if( preg_match( $wzorzec,$tekst) )
echo "znaleziono obrazek";
else 
echo "nie znalezniono obrazka ";
 
 ?>

 <?php  //wyszukiwarka kodu pocztowego 
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "  poczta 34-200 sucha beskidzka ";
if( preg_match( $wzorzec,$tekst) )
echo "znaleziono kod pocztowy";
else 
echo "nie znalezniono kodu pocztowego  ";
 
 ?>
 <?php  //wyszukiwarka kodu pocztowego 
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "  poczta 34-200 sucha beskidzka ";
if( preg_match( $wzorzec,$tekst,$matches) )
echo "znaleziono kod pocztowy".$matches[0];
else 
echo "nie znalezniono kodu pocztowego  ";
 
 ?>

<?php  //wyszukiwarka kodu pocztowego 
$wzorzec =
'/([0123]?\d)+[-\.\/]+([01]?/d)+[-\.\/]+(\d{4})/';
$tekst = "sucha beskidzka dn. 04.10.2023";
if(preg_match($wzorzec, $tekst ) )
    echo "znaleziono date";
else
    echo "nie znaleziono daty";
 
 ?>

<?php  //wyszukiwarka kodu pocztowego 
$wzorzec =
'/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst = "sucha beskidzka dn. 04.10.2023";
if(preg_match($wzorzec, $tekst,$matches) )
    echo "znaleziono date".$matches[0];
else
    echo "nie znaleziono daty";
 
 ?>

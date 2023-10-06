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

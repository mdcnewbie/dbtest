<?php
$dbname = $_GET['dbname'];
$dbuser = $_GET['dbuser'];
$dbpass = $_GET['dbpass'];
$dbhost = $_GET['dbhost'];
$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("No se puede conectar al host: '$dbhost'");
mysqli_select_db($link, $dbname) or die("No se puede abrir la base: '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "Conectado, no existen tablas<br />\n";
} else {
  echo "Existen $tblCnt tablas<br />\n";
}
?>

<?php

include "baglan.php";






$result = 0;

$ad  = $_POST['kullanici_adi'];
$soyad = $_POST['kullanici_soyadi'];
$tcno = $_POST['kullanici_tc'];
$salon_no = $_POST['kullanici_salon'];
$sertifika = $_POST['kullanici_sertifika'];


/* validate whether user has entered all values. */
if(!$ad){
  $result = 2;
}
else {

   $sql= "INSERT INTO optik_bilgileri SET kullanici_adi=UPPER('$ad'), kullanici_soyadi=UPPER('$soyad'), kullanici_tc=$tcno,kullanici_salon=$salon_no ,kullanici_sertifika=$sertifika";

   $stmt   = $con->prepare($sql);
   if($stmt->execute()
   ){
     $result = 1;
   }
}
echo $result;

?>
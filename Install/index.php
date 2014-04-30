<?php 
$bux = 20;
include './../handler.php';
$sql = "CREATE table bux(currentBux INT ( 11 ) PRIMARY KEY)";
$handler->exec($sql);
echo 'Bux table created' . "\r\n";
$sql = "CREATE table giftcode(Code varchar ( 10 ), Redeemed int ( 11 ), Amount int ( 11 ))";
$handler->exec($sql);
echo 'giftcode table created.' . "\r\n";

$sql = "INSERT INTO bux (currentBux) VALUES (:buxx)";
$q = $handler->prepare($sql);
$q->execute(array(':buxx'=> $bux));
echo 'Table Bux has been awarded $bux points.' . "\r\n";

echo 'Welcome to MomBux, you may now use the script.' . "\r\n";
?>
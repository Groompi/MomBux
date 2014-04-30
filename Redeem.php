<?php
	include 'handler.php';
	$red = $_GET['cc'];
	$query = $handler->query("SELECT * FROM giftcode WHERE Code=" . "'" . $red . "'");
	$r = $query->fetch();
	$query = $handler->query("SELECT * FROM bux");
	$r2= $query->fetch();
	$f = True;
	$totalBux = $r2['currentBux'] + $r['Amount'];


		if ($r['Redeemed'] == False){
			$q3 = "UPDATE giftcode SET Redeemed=? WHERE Code=?";
			$q = $handler->prepare($q3);
			$q->execute(array($f, $red));
			echo 'You have redeemed ' . $red . ' ' . $r['Amount'] . ' points have been added.';
			$q3 = "UPDATE bux SET currentBux=?";
			$q = $handler->prepare($q3);
			$q->execute(array($totalBux));
		}else{
			echo "This code is already redeemed";
		}
		/* was before---obsolete
		if($r['Code'] = $red && $r['Redeemed'] = True){
			echo "This code is already redeemed";
		}elseif($r['Code'] == $red){
			$q3 = "UPDATE giftcode SET Redeemed=? WHERE Code=?";
			$q = $handler->prepare($q3);
			$q->execute(array($f, $red));
			echo "You have redeemed $red";
		}else{
			echo "That code is invalid.";
		}*/
		//print $r['Code'] . '\t';
		//print $r['Redeemed'] . "\n";
	
?>
<?php
	include 'handler.php';
	$query = $handler->query('SELECT * FROM giftcode');
	$red = "uhPbs3216E";
	$f = True;

	while($r = $query->fetch()){


		if($r['Code'] = $red && $r['Redeemed'] = True){
			echo "This code is already redeemed";
		}elseif($r['Code'] == $red){
			$q3 = "UPDATE giftcode SET Redeemed=? WHERE Code=?";
			$q = $handler->prepare($q3);
			$q->execute(array($f, $red));
			echo "You have redeemed $red";
		}else{
			echo "That code is invalid.";
		}
	}

		//print $r['Code'] . '\t';
		//print $r['Redeemed'] . "\n";
	
?>
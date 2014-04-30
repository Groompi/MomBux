<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Mombux!</title>
	<?php
		include './../handler.php';
		$length = 10;
		$giftCode = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		$fal = False;
    $amount = $_GET['amount'];

		$sql = "INSERT INTO GiftCode (Code, Redeemed, Amount) VALUES (:giftCode, :fal, :amount)";
		$q = $handler->prepare($sql);
		$q->execute(array(':giftCode'=>$giftCode,
						   ':fal'=>$fal,
               ':amount'=>$amount));

	?>
  </head>
  <body>
			<?php				
				echo "Your Gift Code is $giftCode. \n for $amount points"
			?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

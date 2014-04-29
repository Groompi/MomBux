<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Mombux!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
		include 'handler.php';
		$query = $handler->query('SELECT * FROM bux');
		$deduction = $_GET['pd'];
		$service = $_GET['sid'];


		$r = $query->fetch();
		$bUp = $r['currentBux'];
		$totalBux = $r['currentBux'] - $deduction;

		$q3 = "UPDATE bux SET currentBux=?";
		$q = $handler->prepare($q3);
		$q->execute(array($totalBux));
	?>
  </head>
  <body bgcolor="black">
    <div id="contentWrapper">
		<div class="page-header">
  			<h1>Welcome To MomBux! <small>Serving Moms Since 1996</small></h1>
		</div>
		<div class="alert alert-success">
			<?php				
				if($totalBux > -1){					
						echo "You have succesfully bought $service. You have $totalBux momBux remaining.";
						include 'email.php';
				}else{
					$q = $handler->prepare($q3);
					$q->execute(array($bUp));
					$query = $handler->query('SELECT * FROM bux');
					$r = $query->fetch();
					$totalBux = $r['currentBux'];

						echo "You do not have enough points to buy this service. you have $totalBux points remaining.";
				}				
			?>
			</div>
		
		<ul class="nav nav-pills">
 			 <li class="active"><a href="index.php">Home</a></li>
		</ul>


		<div class="well well-sm">MomBux, Serving moms since 1996. Copyright © 2014</div>

	
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

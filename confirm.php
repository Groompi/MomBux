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
		$r = $query->fetch();
		$currentPoints = $r['currentBux'];
		$deduction = $_GET['pd'];
		$service = $_GET['sid'];
		$site = 'complete.php?pd=' . $deduction . '&sid=' . $service;
	?>
  </head>
  <body bgcolor="black">
    <div id="contentWrapper">
		<div class="page-header">
  			<h1>Welcome To MomBux! <small>Serving Moms Since 1996</small></h1>
		</div>
		<div class="alert alert-success">
			<?php
				echo "you have $currentPoints points remaining";
			?>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title"><?php echo "Are you sure you want to spend your points on $service? <small>You can add your own custom comment! Just type in the text box.</small></h3>";?>
		  </div>
		  <div class="panel-body">
		    <div class="row">
			  <div class="col-lg-6">
			    <div class="input-group">
			      <div class="input-group-btn">
			        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Y/N <span class="caret"></span></button>
			        <ul class="dropdown-menu">
			          <li><a href="<?php echo $site;?>">Yes</a></li>
			          <li class="divider"></li>
			          <li><a href="index.php">No</a></li>
			        </ul>
			      </div><!-- /btn-group -->
			      <input type="text" class="form-control">
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
		  </div>
		</div>

		<div class="well well-sm">MomBux, Serving moms since 1996. Copyright © 2014</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

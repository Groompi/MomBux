<?php
	$service = $_GET['sid'];

	 $to = "twp8888@gmail.com";
	 $subject = "$service";
	 $body = "Mom has asked you to $service\n\nshe has $totalBux bux remaining.";
	 mail($to, $subject, $body);
?>
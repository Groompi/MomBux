<?php
	$service = $_GET['sid'];

	 $to = "email";
	 $subject = "$service";
	 $body = "Mom has asked you to $service\n\nshe has $totalBux bux remaining.";
	 mail($to, $subject, $body);
?>
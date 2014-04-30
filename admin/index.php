<html>
<header>
</header>
<body>

<script>
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
	<form action="giftcode.php" method="get">
		Amount: <input type="idsome" name="amount" onkeypress="return isNumberKey(event)"/>
		<input type="submit" value="Create" onkeypress="return isNumberKey(event)"/>
	</form>

</body>
</html>
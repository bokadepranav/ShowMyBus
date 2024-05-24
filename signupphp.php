<!DOCTYPE html>
<html>
<head>
	<title>contact us php</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","showmybus");
	if(!$con)
	{
		print("not connected");
	}
	$nm=$_REQUEST['nm'];
	$mb=$_REQUEST['mb'];
	$em=$_REQUEST['em'];
	$un=$_REQUEST['un'];
	$pw=$_REQUEST['pw'];
	$count=mysqli_query($con,"insert into profile values('$nm','$mb','$em','$un','$pw')");
	if($count>=1)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert("Account created successfully !");
		</script>
		<?php
		include("login.html");
	}
	mysqli_close($con);
?>
</body>
</html>
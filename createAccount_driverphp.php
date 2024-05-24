<!DOCTYPE html>
<html>
<head>
	<title>createAccount_driver php</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","7709200288","showmybus");
	if(!$con)
	{
		print("not connected");
	}
	$nm=$_REQUEST['nm'];
	$gnd=$_REQUEST['gnd'];
	$age=$_REQUEST['age'];
	$mno=$_REQUEST['mno'];
	$em=$_REQUEST['em'];
	$ct=$_REQUEST['ct'];
	$unm=$_REQUEST['unm'];
	$pwd=$_REQUEST['pwd'];

	$count=mysqli_query($con,"insert into driveracc values('$nm','$gnd','$age','$mno','$em','$ct','$unm','$pwd')");
	if($count>=1)
	{
		?>
			<script type="text/javascript" language="javascript">
				alert("Login Successful !!");
			</script>
			<?php
			include("login_driver.html");
	}
?>
</body>
</html>
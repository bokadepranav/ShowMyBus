<!DOCTYPE html>
<html>
<head>
	<title>contact us php</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","7709200288","showmybus");
	if(!$con)
	{
		print("not connected");
	}
	$n=$_REQUEST['nm'];
	$e=$_REQUEST['em'];
	$m=$_REQUEST['ms'];
	$count=mysqli_query($con,"insert into contactus values('$n','$e','$m')");
	if($count>=1)
	{
		?>
		<script type="text/javascript" language="javascript">
			alert("Messege sent successfully !!");
		</script>
		<?php
		include("index.html");
	}
	mysqli_close($con);
?>
</body>
</html>
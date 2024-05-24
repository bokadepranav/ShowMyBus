<!DOCTYPE html>
<html>
<head>
	<title>login_driver php</title>
</head>
<body>

	<?php
		$con=mysqli_connect("localhost","root","","showmybus");
		if(!$con)
		{
			print("Connection error!");
		}
		$un=$_REQUEST['un'];
		$pw=$_REQUEST['pw'];
		$rs=mysqli_query($con,"select * from driveracc where username='$un' and password='$pw'");
		if(mysqli_num_rows($rs)>=1)
		{
			?>
			<script type="text/javascript" language="javascript">
				alert("You have connected Successfully!!");
			</script>
			<?php
			include("login_driver.html");
		}
		else
		{
			?>
			<script type="text/javascript" language="javascript">
				alert("Invalid Credentials !!");
			</script>
			<?php
			include("login_driver.html");
		}
	?>

</body>
</html>
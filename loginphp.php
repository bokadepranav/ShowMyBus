<!DOCTYPE html>
<html>
<head>
	<title>login php</title>
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
		$rs=mysqli_query($con,"select * from profile where username='$un' and password='$pw'");
		if(mysqli_num_rows($rs)>=1)
		{
			?>
			<script type="text/javascript" language="javascript">
				alert("You have connected Successfully!!");
			</script>
			<?php
			include("userHome.html");
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
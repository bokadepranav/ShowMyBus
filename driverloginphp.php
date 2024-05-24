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
		$rs=mysqli_query($con,"select * from driver_info where username='$un' and password='$pw'");
		if(mysqli_num_rows($rs)>=1)
		{
			?>
			<script type="text/javascript" language="javascript">
				alert("Login Successful !!");
			</script>
			<?php
			include("C:/xampp\htdocs\showmybus\instascan-master\docs/index.html");
		}
		else
		{
			?>
			<script type="text/javascript" language="javascript">
				alert("Invalid Credentials !!");
			</script>
			<?php
			include("login.html");
		}
	?>

</body>
</html>
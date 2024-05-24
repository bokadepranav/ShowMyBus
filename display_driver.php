<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display details </title>
    <style>
        body{
            background-color: rgb(229, 229, 229);
            padding: 80px;
        }
        .heading{
            color: rgb(110, 59, 136);
            font-weight:bolder;
            text-align: center;
            font-size:xx-large;
            text-decoration: underline;
        }
        #tab{
            border: 2px solid rgb(110, 59, 136);
            align-items: center;
            border-collapse: collapse;
            width: 50%;
            background-color: white;
        }
        th{
            width: 50%;
        }
        td{
            width: 50%;
        }
    </style>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","7709200288","showmybus");
        if(!$con)
        {
            print("not connected");
        }
        $user=$_REQUEST['user'];
        $rs=mysqli_query($con,"select * from driveracc where username='$user'");
        $row=mysqli_fetch_array($rs);
        if(!$row)
        {
            ?>
            <script type="text/javascript" language="javascript">
                alert("No Such user Exist..");
                window.location.href = "login_driver.html";
            </script>
            <?php
            
        }
    ?>    
        <h1 class="heading">Details</h1><br><br>

    <table class="table table-bordered border-dark" id="tab" cellpadding="10" border="1"  align="center">
        <thead>
        <tr>
            <th scope="col"><h2>Name</h2></th>
            <td scope="col"><?php print($row['name']) ?></td>
        </tr>
        </thead>
        <tr>
            <th scope="col"><h2>Gender</h2></th>
            <td><?php print($row['gender']) ?></td>
        </tr>
        <tr>
            <th scope="col"><h2>Age</h2></th>
            <td><?php print($row['age']) ?></td>
        </tr>
        <tr>
            <th scope="col"><h2>Mobile No.</h2></th>
            <td><?php print($row['mobileno']) ?></td>
        </tr>
        <tr>
            <th scope="col"><h2>Email</h2></th>
            <td><?php print($row['email']) ?></td>
        </tr>
        <tr>
            <th scope="col"><h2>City</h2></th>
            <td><?php print($row['city']) ?></td>
        </tr>
      
    </table>
    
</body>
</html>
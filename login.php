<?php
require 'connection.php';
session_start();
if($connection)
{   
    if(isset($_POST['button']))
    {   $username=$_POST['name'];
        $email=$_POST['email'];
        $date=$_POST['date'];
        $text=$_POST['textarea'];

        $query2="INSERT INTO `sheet`(`username`,`email`,`date`,`addation`) VALUES('$username','$email','$date','$text') ";
        //mysqli_query($connection,$query2);
        if( mysqli_query($connection,$query2))
        {
            echo"<script>alert('تم الحجز')</script>";
        }

    }
    elseif(isset($_POST['admin']))
    {
        header("location:admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page</title>    
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <div class="main">

        <div class="logo">
            <img src="../hospital.jpg">
            <h2>مستشفي الشفاء</h2>
        </div>
        <div class="form">
            <p>اهلا بكم في مستشفي الشفاء </p>

            <form method="post">
                <input type="text" name="name" placeholder="username" required>
                <input type="text" name="email" placeholder="email" required>
                             
                <input type="date" name="date" required><br>
                مما تعاني <textarea name="textarea" required></textarea>                <br>
                <button name="button">احجز الان</button><br>
                <a href="admin.php"><b>اذا كنت ادمن </b></a><br>
                <a href="user.php"><b>مستخدم عادي</b></a>

            </form> 
<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];

    }
?>
    </div>       


    </div>

</body>
</html>
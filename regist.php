
<html>
<head>
    
    <title>Login_Page</title>    
    <link rel="stylesheet" href="css2.css">
</head>
<body>

    <div class="main">

        <div class="logo">
            <img src="../hospital.jpg">
            <h2>مستشفي الشفاء</h2>
        </div>
        <div class="form">
            <p>اهلا بكم في مستشفي الشفاء </p>
            <p>انت الان تريد انشاء حساب جديد</p>

            <form method="post">
                <input type="text" name="name" placeholder="username" required>
                <input type="password" name="password" placeholder="password" required><br>
                <a href="user.php"><b>للرجوع</b></a>

                <button name="button">submit</button>
                
               
            </form> 
    </div>       


    </div>

</body>
</html>
<?php

require 'fetch.php';
session_start();
$_SESSION['login']="";

if(isset($_POST['button'])&&$connection)
{   $x=0;
    $username=$_POST['name'];
    $password=$_POST['password'];
    $query4="INSERT INTO `users` (`username`, `password`) VALUES('$username','$password')";
    if(mysqli_query($connection,$query4))
    {
        echo "<script>alert('تم... يمكنك تسجيل الدخول الان ')</script>";
    }

    
    
    




    }
?>
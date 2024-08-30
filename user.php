

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

            <form method="post">
                <input type="text" name="name" placeholder="username">
                <input type="password" name="password" placeholder="password"><br>
                

                <button name="button">submit</button><br>
                <a href="regist.php"><b>اذا كنت تريد انشاء حساب جديد</b></a>
                

                
               
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
    foreach($users as $c)
    {
        $v=explode("+",$c);
        if($username==$v[0] && $password==$v[1])
        {
            $_SESSION['login']=$username;
            $x++;
            header("location:normal.php");
            exit;
        }
    }
    if($x==0)
    {
        echo "<script>alert('user name or password is wrong')</script>";
    }
    




    }
?>



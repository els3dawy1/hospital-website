<?php
session_start();
$name[]="";
$email[]="";
$date[]="";
$addation[]="";
$id[]="";



require 'fetch.php';
if(!empty($_SESSION['login']))
{
    echo "<div class=\"div\"><h3>hello admin</h3></div>";
    
}
else{
    $_SESSION['error']="login first";
    header("location:login.php?error=\"login frist\"");

}









?>
<html>
<head>
    <link rel="stylesheet" href="css3.css">
</head>
<body>
    <div class="logo">
            <img src="../hospital.jpg">
            <h2>مستشفي الشفاء</h2>
        </div>
    
    <table class="table">
        <th>
            مما يعاني المريض
        </th>
        <th>
            تاريخ ميلاد المريض
        </th>
        <th>
            حساب المريض      
        </th>
        <th>
            اسم المريض 
        </th>
        <th>
        رقم المريض
        </th>
        <?php
        foreach($coloms as $n)
            {
                $c=explode("+",$n);
                echo "<tr>
                <td>$c[3]</td>
                <td>$c[4]</td>
                <td>$c[2]</td>
                <td>$c[1]</td>
                <td>$c[0]</td>

                </tr>";
                
            }
        ?>
        
        
        
        
        
        

    </table>
</body>
</html>
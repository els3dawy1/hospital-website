<?php
require 'connection.php';
$rows[]="";
if($connection)
{
    $query1 = "SELECT `username`, `password`,`id` FROM `admins`";
    $result = mysqli_query($connection, $query1);
    if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $rows[]=$row['username']."+".$row['password']."+".$row['id'];
        "<br";
        
    }}

    $query2="SELECT `id`,`username`,`email`,`addation`,`date` FROM `sheet` ";
    $result1=mysqli_query($connection,$query2);
    while($colom=mysqli_fetch_assoc($result1))
    {  
        $coloms[]=$colom['id']."+".$colom['username']."+".$colom['email']."+".$colom['addation']."+".$colom['date'];
        

    }
    $query3="SELECT `username`,`password`,`id` FROM `users` ";
    $result3=mysqli_query($connection,$query3);
    while($user=mysqli_fetch_assoc($result3))
    {   
        $users[]=$user['username']."+".$user['password']."+".$user['id'];


    }

}
?>
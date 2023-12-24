<?php
$firstname=$_REQUEST['Number'];
$secondname=$_REQUEST['email'];
$email=$_REQUEST['Telephone'];
$message=$_REQUEST['message'];

if(isset($_POST['btntest'])){
    $host="localhost";
    $user ="root";
    $password ="";
    $db ="Realstate";
    @$connection = mysqli_connect($host, $user, $password, $db);
    $insert = "insert into Realstate values('$Number','$email', '$Telephone', '$message')";
    mysqli_query($connection,$insert);
    if($connection){
        echo("<h1 style='color:green;'>Your Registration is Done!</h1>");
    }
    else{
        echo("<h1 style='color:red;'>Your Registration is Failed!</h1>");
    }
}
?>
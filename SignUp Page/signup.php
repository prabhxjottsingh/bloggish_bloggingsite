<?php
    
    session_start();
    

    $conn = mysqli_connect('localhost:8881','root','','userregistration');

    $fullname = $_POST['text'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $mobno = $_POST['number'];
    $mail = $_POST['email'];
    //$gender = $_POST['gender'];

    $s = "SELECT * FROM userinfo WHERE name = '$username'";

    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Taken";
    }
    else{
        $reg = "INSERT INTO userinfo(name,username,pass,mobno,email) VALUES ('$fullname','$username','$pass','$mobno','$mail')";
        mysqli_query($conn, $reg);
        header('Location:../Log In Page/loginhtml.php');
    }
?>
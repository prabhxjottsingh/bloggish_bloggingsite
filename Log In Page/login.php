<?php
    
    session_start();

    $conn = mysqli_connect('localhost:8881','root','','userregistration');

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $s = "SELECT * FROM userinfo WHERE username = '$username' && pass = '$pass'";

    $result = mysqli_query($conn,$s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        header('location:../Blog Posting Page/BlogPostingPagehtml.php');
    }
    else{
        header('location:loginhtml.php');
        echo "Either SIGN UP or enter the correct username or password";
    }
?>
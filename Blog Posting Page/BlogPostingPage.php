<?php

    $conn = mysqli_connect('localhost:8881', 'root', '', 'userregistration');
    

    if(!$conn){
        echo "<h3>Not Able to establish database Connection</h3>";
    }

    $sqil = "SELECT * FROM blogs";
    $query = mysqli_query($conn,$sqil);
     
    if(isset($_REQUEST["new_post"])){
        $username = $_REQUEST["username"];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO blogs(username,title,content) VALUES('$username','$title','$content')";

        mysqli_query($conn,$sql);

        header('location:../indexhtml.php');
    }

?>
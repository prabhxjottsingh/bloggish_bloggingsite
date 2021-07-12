<?php
 
include "Blog Posting Page/BlogPostingPage.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggish || Home</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body style="background-color: gainsboro" >
    <div class="bgimage" style="background-image: url('https://images.unsplash.com/photo-1485841890310-6a055c88698a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');">
    <nav class="nav">
        <ul>
            <li id="WebsiteName">Bloggish</li>
            <li><a href="#home" class="button">Home</a></li>
            <li><a href="#latest" class="button">Blogs</a></li>
            <li><a href="#about" class="button">About Us</a></li>
            <li>||</li>
            <li><a href="SignUp Page/signuphtml.php" class="button">Sign Up</a></li>
            <li><a href="Log In Page/loginhtml.php" class="button">Log In</a></li>
            <li><a href="https://www.facebook.com/"><img src="Images/Facebook.png" class="SocialImage"></a></li>
            <li><a href="https://www.instagram.com/"><img src="Images/Insta.png" class="SocialImage"></a></li>
            <li><a href="https://www.youtube.com/"><img src="Images/Youtube.png" class="SocialImage"></a></li>
            <li><a href="https://www.Twitter.com/"><img src="Images/Twitter.png" class="SocialImage"></a></li>
          </ul>
    </nav>
    <div id="home">
        <p class="front">SHARE YOUR IDEAS WITH THE WHOLE WORLD.</p>
        <p class="niche">This is a blogging site, where you can share your thoughts with the whole world.</p>
    </div>
    <form>
        <a type="button" class="buttonjoin" href="Log In Page/loginhtml.php">Post Now</a>
    </form>
    <div class="posts" id="latest" >
        <h1>Latest Posts</h1>
        <p class="niche">You must <a href="Log In Page/loginhtml.php">login</a> to see latest blogs or post one.</p>
        <div>
        <?php  foreach( $query as $q){;?>
            <div class="boxed">
                <h5 class="blogcontent"><?php echo $q['title'];?></h5>
                <p class="blogusername"><?php echo "-by "; echo $q['username'];?></p><hr>
                <p class="blogtitle"><?php echo $q['content'];?></p>
            </div>
            <?php };?>
        </div> 
    </div>
    <div class="contact">
        <div class="Abootus">
        <p class="start">START YOUR BLOGGING TODAY </p> 
        </div>
    </div>
    <div id="about" >
        <ul >
            <li class="about">
                <h1>
                    About Us
                </h1>
                <p class="aboutus">
                At BLOGGISH we let people share their ideas and thoughts with the whole world, which help them to connect with people throught out the world and also let them to learn a kot of things from different people's experiences and their thoughts.
                </p>
            </li>
            <li class="follow">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <ul>
                        <li><a href="https://www.facebook.com/"><img src="Images/Facebook.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.instagram.com/"><img src="Images/Insta.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.youtube.com/"><img src="Images/Youtube.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.twitter.com/"><img src="Images/Twitter.png" class="SocialImage2"></a></li>                 
                </ul>
            </li>
        </ul>
       </div>
</body>
</html>

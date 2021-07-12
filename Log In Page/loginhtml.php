<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggish || Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body >
    <nav class="nav">
        <ul>
            <li id="WebsiteName">Bloggish</li>
            <li><a href="../indexhtml.php" class="button">Home</a></li>
            <li><a href="../SignUp Page/signuphtml.php" class="button">Sign Up</a></li>
            <li><a href="#middle"class="button">About Us</a></li>
            <li><a href="https://www.facebook.com/"><img src="../Images/Facebook.png" class="SocialImage"></a></li>
            <li><a href="https://www.instagram.com/"><img src="../Images/Insta.png" class="SocialImage"></a></li>
            <li><a href="https://www.youtube.com/"><img src="../Images/Youtube.png" class="SocialImage"></a></li>
            <li><a href="https://www.Twitter.com/"><img src="../Images/Twitter.png" class="SocialImage"></a></li>
          </ul>
    </nav>
    <div>
    <p class="heading">log in</p>
    </div>
  <div  class="body">
       <div class="welcome">Welcome</div>
       <em class="easy">Hey there, please log in, to share your thoughts with the World.</em>
       <hr color="#dbdde1">
       <form action="login.php" method="POST">
           <em><input type="text" name="username" placeholder="Bloggisher Username" class="vamshi" required></em>
           <br>
           <em><input type="password" name="password" placeholder="Password" class="vamshi" required></em> 
           <div class="by">
        <em> By clicking LogIn Up, you agree to our Terms, Data Policy, Cookie Policy. </em></div>
       <div class="by1"><em>You may receive SMS notifications from us.</em></div>
       <center><div class="button"><input type="submit" value="LogIn"></div></center>
       </form>
      
       <div id="middle" >
        <ul >
            <li class="about">
                <h1>
                    About Us
                </h1>
                <p class="aboutus">
                At BLOGGISH we let people share their ideas and thoughts with the whole world, which help them to connect with people throught out the world and also let them to learn a kot of things from different people's experiences and their thoughts.
                </p>
            </li>
            <li class="about">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <ul>
                <li><a href="https://www.facebook.com/"><img src="../Images/Facebook.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.instagram.com/"><img src="../Images/Insta.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.youtube.com/"><img src="../Images/Youtube.png" class="SocialImage2"></a></li>
                        <li><a href="https://www.twitter.com/"><img src="../Images/Twitter.png" class="SocialImage2"></a></li>                 
                </ul>
            </li>
        </ul>
       </div>
</body>
</html>
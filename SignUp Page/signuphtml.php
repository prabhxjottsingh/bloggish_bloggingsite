<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggish || Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <nav class="nav">
        <ul>
            <li id="WebsiteName">Bloggish</li>
            <li><a href="../indexhtml.php" class="button">Home</a></li>
            <li><a href="../Log In Page/loginhtml.php" class="button">Log In</a></li>
            <li><a href="#middle"class="button">About Us</a></li>
            <li><a href="https://www.facebook.com/"><img src="../Images/Facebook.png" class="SocialImage"></a></li>
            <li><a href="https://www.instagram.com/"><img src="../Images/Insta.png" class="SocialImage"></a></li>
            <li><a href="https://www.youtube.com/"><img src="../Images/Youtube.png" class="SocialImage"></a></li>
            <li><a href="https://www.Twitter.com/"><img src="../Images/Twitter.png" class="SocialImage"></a></li>
          </ul>
    </nav>
    <div>
    <p class="heading">sign up</p>
    </div>
  <div  class="body">
       <div class="welcome">Welcome</div>
       <em class="easy">Hey there, please sign up, to share your thoughts with the World.</em>
       <hr color="#dbdde1">
       <form action="signup.php" method="POST">
        <div>
            <em><input type="text" name="text" placeholder="Full Name" class="vamshi" required></em>
            <em><input type="text" name="username" placeholder="Username" class="vamshi" required></em>  
       </div>
       
       <input type="number" name="password" placeholder="Password" class="number" id="password" required>
       <input type="number" name="number" id="number" placeholder="Mobile Number" class="number" required>
       <input type="email" name="email" id="email" class="email" placeholder="example@gmail.com" required>
 
        <div><em class="gender">Gender</em></div>
        
        <div class="male" name="gender">
            <em>
                Male &nbsp;<input type="radio" name="gender" id="male" required>
                &nbsp;&nbsp; Female &nbsp;<input type="radio" name="gender" id="female" required>
                &nbsp;&nbsp; Other &nbsp;<input type="radio" name="gender" id="other" required>
            </em>
         </div>
         <div class="by">
            <em> By clicking Sign Up, you agree to our Terms, Data Policy, Cookie Policy. </em></div>
           <div class="by1"><em>You may receive SMS notifications from us.</em></div>
           <center><div class="button"><input type="submit" value="Sign Up"></div></center>
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
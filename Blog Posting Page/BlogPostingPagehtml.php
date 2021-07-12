<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggish || Post Blog</title>
    <link rel="stylesheet" href="BlogPosting.css">
</head>
<body >
    <nav class="nav">
        <ul>
            <li id="WebsiteName">Bloggish</li>
            <li><a href="../indexhtml.php" class="button">Home</a></li>
            <li><a href="#middle"class="button">About Us</a></li>
            <li><a href="https://www.facebook.com/"><img src="../Images/Facebook.png" class="SocialImage"></a></li>
            <li><a href="https://www.instagram.com/"><img src="../Images/Insta.png" class="SocialImage"></a></li>
            <li><a href="https://www.youtube.com/"><img src="../Images/Youtube.png" class="SocialImage"></a></li>
            <li><a href="https://www.Twitter.com/"><img src="../Images/Twitter.png" class="SocialImage"></a></li>
          </ul>
    </nav>
    <div>
    <p class="click">Click on the HOME link in the navigation bar to read blogs.</p>    
    <p class="heading">Post Your Blog</p>
    </div>
  <div  class="body">
       <div class="welcome">Write your thoughts below</div>
       <em class="easy">Hey there, please write the content, which you want to share with the World.</em>
       <hr color="#dbdde1">
       <form action="BlogPostingPage.php" method="REQUEST">
           <em><input type="text" name="username" placeholder="Please Write your Username here" class="vamshi" id="titlebox" required></em>
           <em><input type="text" name="title" placeholder="Title" class="vamshi" id="titlebox" required></em>
           <em><input type="text" name="content" placeholder="Body" class="vamshi2" id="textboxid" required></em> 
        <div class="by">
        <em> Please click the POST NOW button below to post your blog.</em></div>
       <center><div class="button"><input type="submit" name="new_post" value="Post Now"></div></center>
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
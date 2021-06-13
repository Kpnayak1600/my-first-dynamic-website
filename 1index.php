
<?php
    //connection to server and database
  
$servername="localhost";
$username = "root";
$password = "";       
$database = "website";    

 
//create a connection
 $conn = mysqli_connect($servername,$username,$password,$database);

 // checking connection is successful or not
 if(!$conn){
     die ("connection failed  due to :".mysqli_connect_error());
 }
//  else{
//      echo "connection is successful";
//      echo "<p>";
//  }

     $name =  $_POST['name'];
     $pass  =  $_POST['phone'];
     $email =  $_POST['email'];
     $comment =  $_POST['text'];

     $sql = "INSERT INTO `website` ( `username`, `phone`, `email`, `comment`, `dt`) 
     VALUES ( '$name', '$pass', '$email', '$comment', current_timestamp());";
        $result = mysqli_query($conn,$sql);

//check for Data inserted successfully or not
// if($result){

    
  
// }
// else {
//     echo "The record has not been inserted  successfully  because of this error------->".mysqli_error($conn);
// }


    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@633&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap');
</style>
<script> src="https://kit.fontawesome.com/7372aee7c8.js" crossorigin="anonymous"></script>
    <title>iEducate- Transforming online education </title>
</head>
<link ref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>


    <nav class="navbar background  h-nav-resp " id="rubbish">
        <ul class="nav-list v-class-resp" id="rubbish3">
            <div class="logo"><img src="image/my.png" alt="logo"></div>
            <!-- <div class="khudse"> -->
            <li><a href="#home"><h3>Home</h3></a></li>
            <li><a href="#about"><h3>About</h3></a></li>
            <li><a href="#services"><h3>Services</h3></a></li>
            <li><a href="#contact"><h3>Contact Us</h3></a></li>
            <!-- </div> -->
        </ul>
        <div class="rightnav   v-class-resp " id="rubbish2">
            <input class = "forResponse" type="text" name="search" id="search">
           <button class="btn btn-sm">Search</button></div> 
              <!-- formation of homeburger used in making responsive  -->
        <div class="burger" id = "faltu">
            <label for="toggel"></label>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
     
    </nav>




    <!-- nav bar prepared,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->



    <section class="background firstsection">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">The future of education is here</p>
                <p class="text-small resp-text"> <h2>
                    In this world of seven billion people , we need to educate
                    all of them .The future of education is all about 
                    strengthening and incorporating student-centric learning. In this endeavor, the onus is on
                     teachers to adopt personalized learning and teaching patterns.</h2>
                </p>
              
            </div>
            <div class="secondhalf">
                <img src="https://source.unsplash.com/200x180/?laptop" class="image imgg">
            </div>
        </div>
    </section>

    <!-- 
         section one completed -->
    <section class="section secright">
        <div class="paras">
            <p class="text-big">Should You Learn JavaScript?</p>
            <p class="text-small"><h2>
                JavaScript is an extremely versatile language. Once you’ve mastered it, 
                the possibilities are endless: you can code on the client-side (frontend) using Angular and on 
                the server-side (backend) using Node.js. You can also develop web, mobile, and desktop apps using 
                React, React Native, and Electron, and you can even get involved in machine learning.
              If you want to become a frontend developer, JavaScript is a prerequisite. However, that’s not the only
               career path open to you as a JavaScript expert. Mastering this key programming language could see you 
               go on to work in full-stack development, games development, information security software engineering,
                machine learning, and artificial intelligence—to name just a few!
            Ultimately, if you want any kind of development or engineering career, proficiency in JavaScript is a must.
               .</h2> </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/200x300/?html" alt="image is here" class="imgFluid flex image">
        </div>
    </section>
    <section class=" section1 secleft">
        <div class="thumbnail">
            <img src="https://source.unsplash.com/200x300/?php" alt="image is here" class="imgFluid flexright image">
        </div>
        <div class="paras">
            <p class="text-big">Here's why PHP is still popular in 2021</p>
            <p class="text-small"> <h2>
                PHP is one of the oldest programming languages used by developers across the world.
                 It is largely used in web development. PHP has served as the primary component in some of the biggest 
                 atforms such as WordPress and Drupal.
              The language created in 1994 still has high demand across the industry. Developers have praised PHP
               for its ease of use. One reason behind the popularity of PHP is the age of its codebase. The longer
                the language sticks around, the more legacy code it usually generates.
                Unlike many other programming languages that follow a steep learning curve, PHP is comparatively easy 
                to learn. You can build a working dynamic webpage with a database in a couple of days with PHP. The
                 programming language is powerful in all the things it can accomplish in the web development area.
                 </h2> </p>
        </div>

    </section>
    </section>
    <section class="section secright">
        <div class="paras">
            <p class="text-big">Why Data Structures and Algorithms Are Important to Learn?</p>
            <p class="text-small"> <h2>
                Data structures and algorithms play a major role in implementing software and in 
                the hiring process as well. A lot of students and professionals have this question that why these
                 companies’ interviews are focused on DSA instead of language/frameworks/tools specific questions?
                  Let us explain why it happens… 
            When you ask someone to make a decision for something the good one will be able to tell you “I chose to
             do X because it’s better than A, B in these ways. I could have gone with C, but I felt this was a better
              choice because of this“. In our daily life, we always go with that person who can complete the task in 
              a short amount of time with efficiency and using fewer resources. The same things happen with these 
              companies. The problem faced by these companies is much harder and at a much larger scale. Software 
              developers also have to make the right decisions when it comes to solving the problems of these
               companies. </h2> </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/200x300/?stack/overflow/computer" alt="image is here" class="imgFluid flex  image">
        </div>
    </section>

    <section class="contact">
        <h2 class="text-centre"> feedback</h2>
        

 
        <div class="form ">
            <form action="1index.php" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="enter your name">
            <input class="form-input" type="phone" name="phone" id="phone" placeholder="enter your phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="enter your email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="5"
                placeholder="Elaborate your concern"></textarea>


            
                <input class="btn btn-sm" type="submit" value="Submit">
                </form>
        </div>
    </section>
   
    <footer class="background">
        <p class="text-footer ">
       
        <?php
        // copyright &copy; 2027 www.iEducate.com- All right reserved
        $year = date("Y");
      
        echo "copyright &copy; $year | All right reserved <br>"
        ?>
    </p>
    </footer>
    <script src="js/res.js"></script>

</body>

</html>
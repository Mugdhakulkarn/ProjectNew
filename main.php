<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>

 
   <section id="header">
    
    <nav>
        <div class="logo">
          <p>Fork Infosystems</p>
        </div>
        <ul>
          <li><a href="main.php">Home</a></li>
          <li><a href="aboutUs/aboutUs.php">About Us</a></li>
          <li><a href="gallery/gallery.php">Gallery</a></li>
          <li><a href="courses/courses.php">Courses</a></li>
          <li><a href="placement/placement.php">Placement</a></li>
          <li><a href="contactUs/contactUs.php">Contact Us</a></li>
          <button class="signupbutton"  onclick="openForm()">Sign Up</button>
        </ul>
    </nav>

      <!-- <div id="slider">
        <figure>
          <div class="column">
            <div class="image-container1">
              <img src="assets\images\domenico-loia-hGV2TfOh0ns-unsplash.jpg" class="full-width-image">
              <img src="assets\images\download (1).png" class="full-width-image">
              <img src="assets\images\shahadat-rahman-gnyA8vd3Otc-unsplash.jpg" class="full-width-image"> 
              <img src="assets\images\pexels-jeandaniel-francoeur-4006151.jpg" class="full-width-image">  
                 
                <div class="banner-text">
                    <h3>Learn To Code</h3>
                    <h2>Because The World Runs On Code</h2>
                </div>
            </div>
          </div>         
        </figure>
    </div> -->
    
    <!-- <section class="container">
      <div class="slider-wrapper">
        <div class="slider">
           <img id="slide-1" src="assets\images\domenico-loia-hGV2TfOh0ns-unsplash.jpg"
            alt="3D rendering of an imaginary orange planet in space"/>

            <img id="slide-2" src="assets\images\download (1).png"
            alt="3D rendering of an imaginary orange planet "/>

            <img id="slide-3" src="assets\images\shahadat-rahman-gnyA8vd3Otc-unsplash.jpg"
            alt="3D rendering of an imaginary orange space"/>
        </div>
        <div class="slider-nav">
          <a href="#slide-1"></a>
          <a href="#slide-2"></a>
          <a href="#slide-3"></a>
        </div>
      </div>
    </section> -->

    <!-- <div class="conatiner">
      <div class="images">
        <img src="assets\images\domenico-loia-hGV2TfOh0ns-unsplash.jpg">
        <img src="assets\images\download (1).png">
        <img src="assets\images\shahadat-rahman-gnyA8vd3Otc-unsplash.jpg">
        <img src="assets\images\pexels-jeandaniel-francoeur-4006151.jpg">
      </div>
    </div> -->

<div class="slider">
   <div class="slides">
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">

    <div class="slide first">
      <img src="assets\images\domenico-loia-hGV2TfOh0ns-unsplash.jpg" alt="">
    </div>
    <div class="slide first">
      <img src="assets\images\download (1).png" alt="">
    </div>
    <div class="slide first">
      <img src="assets\images\shahadat-rahman-gnyA8vd3Otc-unsplash.jpg" alt="">
    </div>
    <div class="slide first">
      <img src="assets\images\pexels-jeandaniel-francoeur-4006151.jpg" alt="">
    </div>

    <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
    </div>

   </div>

   <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
   </div>
</div>

<script type="text/javascript">
  var counter=1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter = 1;
    }
  },5000);
</script>

  <div class="notice">
    <marquee width="100%" direction="right">
       Important notice
    </marquee>       
  </div>
   </section>


<div class="maincontainer">
  <section id="future">
    <div>
        <h3 class="title">THE FUTURE BEGINS HERE</h3> 
    </div>
  
      <div class="image-text-container">
        <div class="text-container">
          <p class=info1>
            Fork Infosystems,Karad is founded by Mr.Ranjit Kumbhar
              with the vision of building a career of students in the field
              of IT. The Institute has become a well established name in
              the arena of coaching for various Computer Languages.
              Since our inception, we are conducting classes for every
              computer related field. Ours is perhaps the only institute that
              is capable to groom both average and brilliant students.
            </p>
        </div>
       <div class="left-image-container">
          <img src="\Project\public\images\downloa.png" class="textimg">
       </div>
    </div>

 </section>

 <section id="whatwedo">
  <div>
      <h3 class="title">What we do?</h3> 
  </div>

  <div class="image-text-container">
    <div class="left-img-container">
      <img src="\Project\public\images\background1.jpg" class="textimg">
    </div>
    <div class="text-container">
      <ul class="text">
        <li>We understand that individual learning capabilities are different and so we offer customized course for each student.</li>
        <li>We provide 100% practical and real time training on Java, Selenium Testing, Spring and Python.</li>
        <li>Our Java Tutorials are made easy to learn for beginners to advanced learners. Hence, we don’t assume any existing knowledge of development from the readers.

        </li>
      </ul>    
    </div>
  </div>

</section>

<section id="course">
    <div>
        <h3 class="title">Best IT Job Oriented Courses</h3>
    </div>
   <div class="main-img-container">
    <div class="img-container">
        <div class="img-card"><div class="image"><img src="\Project\public\images\(4).png" alt=""></div></div>
        <div class="img-card"><div class="image"><img src="\Project\public\images\(3).png" alt=""></div></div>
        <div class="img-card"><div class="image"><img src="\Project\public\images\(5).png" alt=""></div></div>
        <div class="img-card"><div class="image"><img src="\Project\public\images\(1).jpg" alt=""></div></div>
        <div class="img-card"><div class="image"><img src="\Project\public\images\(2).jpg" alt=""></div></div>

    </div>
   </div>

</section>



</div>
    
    <section class="footer">
    <div class="social">


      
      <div class="foot">
          <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>  
      
  </div>
</section>  
<!-- <script src="main.js"></script> -->

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h2 class="signupform">Sign Up Form</h2>

    <label for="name"><b>Name :</b></label>
    <input type="text" placeholder="Enter Name" name="psw" required>

    <label for="name"><b>Mobile No :</b></label>
    <input type="text" placeholder="Enter Mobile No" name="psw" required>

    <label for="email"><b>Email :</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Confirm Password :</b></label>
    <input type="password" placeholder="Confirm Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
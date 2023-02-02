<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
$message=$_SESSION['message'];

echo "<script type='text/javascript'> 

alert('$message'); 

</script>";





?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's management system.</title>
    <link rel="stylesheet" type="text/css" href ="style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
      <nav>
        <label class ="logo">W-school</label>
        <ul>
            
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php"class ="btn btn-success">Login</a></li>
        </ul>
      </nav>

      <div class="section1">
        <label class="img_text">We teach students with care.</label>
        <img class="main_img" src="main image.jpg">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class ="welcome_img"src="school2.jpg" alt="">
          
            </div>

            <div class="col-md-8">
              <h1>Welcome to W-schools</h1>
              <P> w- school is an educational center were students are trained on different ICT fields such as <br> data Processing <br> data analysis and information security.<br>Our students are awarded certificate at the end of the program and our best students are granted scholarship for our advanced programs.<br> Thank you for partnering with us.</P>


            </div>

        </div>
      </div>



<center> 
  <h1>Our teachers</h1>
</center>

  <div class="container1">
    <div class="box1">
      <img class ="teacher_1" src="teacher1.jpg">
      <p> in a vibrant, academically challenging,and encouraging environment where manifold viewpoints are prized and celebrated.</p>
    </div>
    <div class="box2">
      <img class ="teacher_1" src="teacher2.jpg">
      <p>in a vibrant, academically challenging,and encouraging environment where manifold viewpoints are prized and celebrated</p>
    </div>
    <div class="box3">
      <img class ="teacher_1"  src="teacher3.jpg">
      <p>in a vibrant, academically challenging,and encouraging environment where manifold viewpoints are prized and celebrated</p>
    </div>
    <br clear="both" />
  </div>

  
<center> 
  <h1>Our Courses</h1>
</center>

<div> 
  <div class="container2">
      <div class="box11">
        <img class ="teacher_1" src="data analysis1.jpg">
        <p> Data analysis</p>
      </div>
      
      <div class="box12">
        <img class="teacher_1" src="image4.jpg">
        <p>Software Engineering</p>
      </div>
      <div class="box13">
        <img class="teacher_1" src="front.jpg">
        <p> Design</p>
      </div>
      <br clear="both" />
    </div>

</div>

        <center>
          <h1 class="adm"> Admission Form</h1>
        </center>
        <div align="center"class="admission_form">

        <form action="data_check.php" method="POST"> 
          <div class="adm_int"> 
            <label class ="label_text"> Name</label>
            <input class="input_design"type="text" name="name">
          </div>
          <div class="adm_int"> 
            <label class ="label_text">Email</label>
            <input class="input_design" type="text" name="email">
          </div>
          <div class="adm_int"> 
            <label class ="label_text">Phone</label>
            <input class="input_design"type="text" name="phone">
          </div>
          <div class="adm_int"> 
            <label class="label_text">message</label>
            <textarea class="input_txt" name="message"></textarea>
          </div>
          <div> 
           
            <input class="btn btn-primary" id="sub" type="submit" value="apply" name="apply">
          </div>


        
</form>
    </div>
    </div>
    
</div>
<footer> 
  <h3 class="footer_txt"> All @copyright reserved by creative minds technologies</h3>
</footer>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
   $username=$_POST['name'];
   $user_email=$_POST['email'];
   $user_phone=$_POST['phone'];
   $user_password=$_POST['password'];
   $usertype="student";

   $check="SELECT * FROM user WHERE username='username'";

   $check_user=mysqli_query($data,$check);


   $row_count=mysqli_num_rows($check_user);

   if($row==1)
   { 
        echo "Username Already exist. Try Another one";


   }

   else
   { 


   $sql="INSERT INTO user(username,email,phone,usertype,password) VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')";


   $result=mysqli_query($data,$sql);

   if($result)
   
   {
      echo " <script type='text/javascript'> 
    alert('Data uploaded successfully');
      </script"; 
    }

    else
    {
        echo "Upload Failed";
    }

}


}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


    <style type="text/css">
     label
     {
        display: inline-block;
        text-align:right;
        width: 100px;
        padding-top:10px;
        padding-bottom: 10px;

    

     }

     .div_deg
     {
        background-color: skyblue;
        width: 350px;
        padding-top: 60px;
        padding-bottom: 60px;


     }
    </style>


    <link rel="stylesheet" type="text/css" href ="admin.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<header class="header">

<a href="logout.php">Admin Dashboard</a>
<div class="logout">
    <a href="logout.php"class="btn btn-primary">logout</a>
</div>
</header>

<aside>
    <ul>

    <li>
    <ion-icon name="people-outline"></ion-icon>

    <a href="admission.php"> Admission</a>
    
    </li>
    
    <li>
    <ion-icon name="school"></ion-icon>
   
    <a href="add_student.php"> Add Students</a>
    </li>
    <li>
    <ion-icon name="mail-open"></ion-icon>
    <a href="view_student.php">View Students</a>
    </li>
    <li>
    <ion-icon name="search"></ion-icon>
    <a href="">Add Teachers</a>
    </li>

    <li>
    <ion-icon name="wifi"></ion-icon>
    <a href="">View Teachers</a>
    </li>
    <li>
    <ion-icon name="logo-xbox"></ion-icon>

    <a href="">Add Courses</a>
    </li>
    <li>
    <ion-icon name="apps"></ion-icon>
    <a href="">View Courses</a>
    </li>
    



    </li>






    </ul>








</aside>

<div class="content">
    <center>
<h1> Add Students</h1>

<div class="div_deg">

<form action="#" method="POST">
<div>
   <label>Username</label> 
   <input type="text" name="name">
</div>

<div>
   <label>Email</label> 
   <input type="email" name="email">
</div>

<div>
   <label>Phone</label> 
   <input type="text" name="phone">
</div>

<div>
   <label>Password</label> 
   <input type="text" name="password">
</div>

<div>
    <input type="submit" class=" btn btn-primary" name="add_student" value="Add student">

    </center>
</div>



</form>

</div>
    
</div>








<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>
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


$id=$_GET['student_id'];

$sql="SELECT * FROM user WHERE id='$id'";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update']))
{

$name=$POST['name'];
$email=$POST['email'];
$phone=$POST['phone'];
$password=$POST['password'];

$query="UPDATE user SET username='$name', email='$email',phone='$phone',password='$password' WHERE id ='$id'";

$result2=mysqli_query($data,$query);

if($result2)
{
   header("location:view_student.php");
}



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update student data</title>


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
<h1> Update student data</h1>

<div class="div_deg">

<form action="#" method="POST">
<div>
   <label>Username</label> 
   <input type="text" name="name" value="<?php
   echo "{$info['username']}"
   ;?>">
</div>

<div>
   <label>Email</label> 
   <input type="email" name="name"value="<?php
   echo "{$info['email']}"
   ;?>">
</div>

<div>
   <label>Phone</label> 
   <input type="text" name="name"value="<?php
   echo "{$info['phone']}"
   ;?>">
</div>

<div>
   <label>Password</label> 
   <input type="text" name="name"value="<?php
   echo "{$info['password']}"
   ;?>">>
</div>

<div>
    <input type="submit" class=" btn btn-success" name="update" value="Update">

    </center>
</div>



</form>

</div>
    
</div>








<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>
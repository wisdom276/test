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
?>







l


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
<h1> Admin Dashboard</h1>
    
</div>






<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>
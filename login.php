<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>

    <link rel="stylesheet" type="text/css" href="style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body background="backgrd2.jpeg"class="today_deg">
           <center>
    <div class="form_deg">
               <center class="title_deg">
                login form

                <h4>

                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                
                 echo $_SESSION['loginMessage'];

                ?>
                </h4>
                
               </center>
        <form  action="login_check.php" method="POST"class="login_deg">
            <div> 
                <label class="label_deg">username</label>
                <input type="text" name="username">
            </div>
            <div> 
                <label class="label_deg">password </label>
                <input type="password" name="password">
                
            </div>
            <div> 
               
                <input class="btn btn-primary" type="submit" name="submit" value="login">
            </div>
        
    
    
    
    
    
    
    </form>
    </div>

    <center>
    
</body>
</html>
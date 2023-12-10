<?php 
    session_start();
    require_once("core/sessions.php");
    if(!isset($_SESSION['user'])){
        header("location:registration.php");
        die;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bahgaa Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5">
                <h1 class="p-2 mt-3">Your Profile</h1>
                <h2>Name : <?php echo sessionGet('user')['name']; ?></h2>
                <h2>Email : <?php echo sessionGet('user')['email']; ?></h2>
                <h2>Password : <?php echo sessionGet('user')['password']; ?></h2>
                <h2>Confirm_Password : <?php echo sessionGet('user')['confirm_password']; ?></h2>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
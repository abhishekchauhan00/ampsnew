<?php 

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <script language="javascript" type="text/javascript">
      window.history.forward();
      </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #a{
    margin-top: 20vh;
}
.logos{
    height: 50px;
    display: block;
    margin:auto;
}

        </style>
    <title>AMPS || ADMIN</title>
  </head>
  <body>
      <div class="container " id="a">
    <img class="logos" src="images/logo1.png">
  <form class="mt-4" action="validation.php" method="POST">
  
  

  <div class="form-group">
    <label for="exampleInputEmail1">User Id</label>
    <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter UserId">
    <small id="emailHelp" class="form-text text-muted">We'll never share your ID with anyone else.</small>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-primary ">login</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
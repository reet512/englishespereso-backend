<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>English Espereso - Contact Us</title>
  </head>
  <body>
    <h1 class="text-center" style="color:#350663"> GET IN TOUCH</h1>

    <?php if( $_SESSION['insert-success']) {?>
        <p class="alert alert-success text-center"><?php echo  $_SESSION['insert-success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </p>
    <?php unset( $_SESSION['insert-success']); }?>

    <?php if($_SESSION['insert-unsuccess']) {?>
        <p class="alert alert-danger text-center"><?php echo $_SESSION['insert-unsuccess']; ?>
            <button type="button" class="close" datta-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </p>
    <?php unset($_SESSION['insert-unsuccess']); }?>    
    <div class="container">
    <form action="connect_action.php" method="post">
        <div class="row">
            <div class="offset-lg-2 offset-md-2 col-lg-4 col-md-4 col-12 mt-5">
               <h6 class="text-center">Name</h6>
               <input type="text" name="name" class="form-control"></input>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
               <h6 class="text-center">Email</h6>
               <input type="email" name="email" class="form-control"></input>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-2 offset-md-2 col-lg-4 col-md-4 col-12 mt-5">
               <h6 class="text-center">Phone Number</h6>
               <input type="text" name="phone" class="form-control"></input>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
               <h6 class="text-center">Preffered Call Time</h6>
               <input type="text" name="call_time" class="form-control"></input>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-1 col-lg-10 col-md-10 col-12 mt-5">
               <h6 class="text-center">Message</h6>
               <textarea type="text" name="message" class="offset-md-1 col-lg-10 col-md-10 col-12"></textarea>
            </div>
        </div>
        <div class="text-center mt-5">
            <button type="submit" name="submit" class="btn text-white" style="background-color:#350663; font-size:25px;">SEND MESSAGE</button>
        </div>
        </form>
    </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
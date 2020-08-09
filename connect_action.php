<?php
session_start();
$server = 'localhost';
$username = "root";
$password = "";
$db_name = 'english-espereso';

$con = mysqli_connect($server, $username, $password, $db_name);

if ($con)
{
   // echo "connection successfull"; 
   ?>
        <script>
            alert('connection successfull');
        </script>
   <?php
}
else
{
    //echo "connection not successfull";
    ?>
    <script>
        alert('connection not successfull');
    </script>
<?php
}

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $call_time = $_POST['call_time'];
    $message = $_POST['message'];

    $insert = " insert into contact(name, email, phone, call_time, message) VALUES('$name', '$email', '$phone', '$call_time', '$message') "; 
    $query = mysqli_query($con,  $insert);

    if ($query)
    {
        header('location:contact.php');
        $_SESSION['insert-success'] = 'Message sent successfully';
    }
    else
    {
        header('location:contact.php');
        $_SESSION['insert-unsuccess'] = 'Message not sent';
    }
}








?>












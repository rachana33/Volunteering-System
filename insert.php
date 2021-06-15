<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $event = $_POST['event'];
     $sql = "INSERT INTO users1 (name,email,mobile,event)
     VALUES ('$name','$email','$mobile','$event')";
     if (mysqli_query($conn, $sql)) {
        echo "";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<html>
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
   </head>
   <h3>Your event has been succesfully added to our database!</h3>
   <h2> Click the button below to view all the registered events<h2>
      <button class="btn btn-primary" onclick="location.href = 'list of tasks.php';"> Click here! </button>
</html>
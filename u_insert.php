<?php
include_once 'u_conn.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $event = $_POST['event'];
     $sql = "INSERT INTO registeredusers (name,email,mobile,event)
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
   <h3>You have successfully registered!</h3>
   <h2> Click the button below to return to the homepage.<h2>
      <button class="btn btn-primary" onclick="location.href = 'homepage.php';"> Click here! </button>
</html>
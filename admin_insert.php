<?php
include_once 'admin_conn.php';
if(isset($_POST['submit']))
{    
     $cname = $_POST['cname'];
     $number = $_POST['number'];
     $remarks = $_POST['remarks'];
     $product = $_POST['product'];
     $cemail = $_POST['cemail'];
     $cemail2 = $_POST['cemail2'];
     $reference = $_POST['reference'];
     $feedback = $_POST['feedback'];
     $sql = "INSERT INTO admin (cname,number,remarks,product,cemail,cemail2,reference,feedback)
     VALUES ('$cname','$number','$remarks','$product','$cemail','$cemail2','$reference','$feedback')";
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
   <h3>Data added!</h3>
</html>
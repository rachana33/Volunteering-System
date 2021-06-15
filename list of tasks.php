<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<title>List of tasks and registration!</title>
<style>
table {
width: 75%;
color: whitesmoke;
font-size: 25px;
text-align: left;
}
th {
background-color: #a1caf1;
color: white;
}
body {
  background-image: linear-gradient(rgb(8, 8, 8,0.9),rgba(19, 20, 20, 0.5)), url(v12.jpg);
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile Number</th>
<th>Event Description</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "new_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email, mobile, event FROM users1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["mobile"]. "</td><td>" .$row["event"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


</table>
<h2 style="color: white;"> Click the button below to register to events!<h2>
      
<a href="u_event_reg.php" target="_blank"><input type="Submit" value="Click Here" /></a>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        body {
	background-image:linear-gradient(rgb(8, 8, 8,0.5),rgba(19, 20, 20, 0.5)), url(main.jpg);
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 style="color: white;">Event Form</h2>
                    </div>
                    <p style="color: white;">Please fill this form and submit to register a new event to our database.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label style="color: white;">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Mobile</label>
                            <input type="mobile" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Event Details</label>
                            <input type="text" name="event" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
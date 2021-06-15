<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        body {
	justify-content: center;
	align-items: center;

}
    </style>

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 style="color: black;">HEADING</h2>
                    </div>
                    <form action="admin_insert.php" method="post">
                        <div class="form-group">
                            <label style="color: black;">Customer Name</label>
                            <input type="text" name="cname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Contact Number</label>
                            <input type="text" name="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Remarks</label>
                            <input type="mobile" name="remarks" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Product Requirement</label>
                            <input type="text" name="product" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Customer Email Id</label>
                            <input type="text" name="cemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Customer Alter Email Id</label>
                            <input type="text" name="cemail2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Reffered By</label>
                            <input type="text" name="reference" class="form-control">
                        </div>                      
                        <div class="form-group">
                            <label style="color: black;">Feedback</label>
                            <input type="text" name="feedback" class="form-control">
                        </div>  
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
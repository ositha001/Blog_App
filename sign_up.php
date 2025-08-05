
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="CSS/sign_up.css">

    <title>Blog App</title>
</head>
<body style="background-color=dark-blue">

<?php include_once('inc/navbar.php') ?>

<div class="container mt-4">
    <div class="row">
         <div class="col-md-12">

         <div class="card">
            <div class="card-header" id="card-header">
                <h4>Sign Up Form</h4>
            </div>
            <div class="card-body" id="card-body">

            <form action="index.php" id="form-body">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your First Name</small>
                </div>

                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="" id="" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Last Name</small>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="" id="" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Email Address</small>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="" id="" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Password</small>
                </div>

            </div>
            <div class="card-footer" id="card-footer">
                <button type="submit" class="btn btn-success col-6">Sign Up</button>
            </div>
            </form>
         </div>

            </div>
         </div>
    </div>
</div>

</body>
</html>
<?php include_once('inc/conn.php') ?>
<?php

    if(isset($_POST['submit'])){

        //Declaraing variables and assign empty values
        $firstname = "";
        $lastname = "";
        $email = "";
        $password = "";

        $firstname = input_varify($_POST['firstname']);
        $lastname = input_varify($_POST['lastname']);
        $email = input_varify($_POST['email']);
        $password = input_varify($_POST['password']);

        $query = "INSERT INTO TBL_User(Fname,Lname,email,pwd,Reg_DT) VALUES(
        '{$firstname}','{$lastname}','{$email}','{$password}',NOW()
        )";

        $result = mysqli_query($conn,$query);

        if($result){
            ?>
                <!-- //Registration successfull messege -->
                <div class="alert alert-info" role="alert">
                    <?php  echo "User Registation Success"; ?>!
                </div>
            <?php 

        }else{
                <!-- //Registration Faill messege -->
            ?>
             <div class="alert alert-warning" role="alert">
                    <?php  echo mysqli_error($conn); ?>!
                </div>
            <?php

        }

    }

    function input_varify($data){
        //Remove empty spece from user input
        $data = trim($data);
        //Remove back slash from user input
        $data = stripslashes($data);
        //conver special chrs to html entities
        $data = htmlspecialchars($data);

        return $data;
    }

?>

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

            <form action="sign_up.php" id="form-body" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your First Name</small>
                </div>

                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Last Name</small>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Email Address</small>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="">
                    <small id="helpId" class="text-muted">Enete Your Password</small>
                </div>

            </div>
            <div class="card-footer" id="card-footer">
                <button type="submit" name="submit" class="btn btn-success col-6">Sign Up</button>
            </div>
            </form>
         </div>

            </div>
         </div>
    </div>
</div>

</body>
</html>
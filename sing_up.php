<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <form>
                <div class="form-group">
                  <label for="first_Name">First Name:</label>
                  <input type="text" class="form-control" id="first_Name" placeholder="Enter first name" name="firstName">
                </div>

                <div class="form-group">
                  <label for="last_Name">Last name:</label>
                  <input type="text" class="form-control" id="last_Name"  placeholder="Enter last name" name="lastName">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                  <label for="phone_number">Phone Number:</label>
                  <input type="number" class="form-control" id="phone_number" placeholder="Enter phone Number" name="number">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>

                <button type="submit" class="btn btn-primary mt-3" name="singUp">Sing up!</button>
              </form>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_GET["singUp"])) {

    $userFirstName = $_GET["firstName"];
    $userLastName = $_GET["lastName"];
    $userEmail = $_GET["email"];
    $userPhone = $_GET["number"];
    $userPass = $_GET["pass"];

    $db_login  = mysqli_connect("localhost", "root", "", "users");

    if($db_login == true) {
      $database_dataQyery = "INSERT INTO `user_sing_up_info` (`first_name`, `last_name`, `mail`, `phone_number`, `password`) VALUES ('$userFirstName', '$userLastName', '$userEmail', '$userPhone', '$userPass')";
      $insertData = mysqli_query($db_login , $database_dataQyery);

      header("Location: index.php");
    }
    else {
      echo "Database user_sing_up error while setting  data. Contract the Developer soon.";
    }

//     $db = mysqli_connect("localhost", "root" , "" , "users");

//     if($db) {
//         echo "DB is connected";
//     }
//     else {
//         echo "DB is not connected!";
//     }
//     echo "<br>";
    
// $user_Query = "INSERT INTO `user_info` (`user_name`, `email`, `phone`, `password`) VALUES ('$userFirstName', ' $userEmail', '$userPhone', '$userPass')";
// $insert_info_to_db = mysqli_query($db, $user_Query);

// if($insert_info_to_db) {
//     echo "Data Insert to db is success....";
// }
// else {
//     echo "Data is not inserted!";
// }


}


//INSERT INTO `user_info` (`user_name`, `email`, `phone`, `password`) VALUES ('Joshim 3', 'test2.php', '0222222', '08212200');



?>
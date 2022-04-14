<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users list</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="container mt-5">
<?php
    if(isset($_REQUEST["delete_success"])) {
        echo "<div class='user_profile_delete animate__animated animate__zoomInDown'>This user no more on database.</div>";
    }
?>

    <?php
$databaseAccess = mysqli_connect("localhost", "root", "", "users");
$dataQuery = "SELECT * FROM `user_sing_up_info`";
$getData = mysqli_query($databaseAccess, $dataQuery);
?>
    <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">DB serial</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Created Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <?php

  while($dataAssoc = mysqli_fetch_assoc($getData)) {
    $db_serial = $dataAssoc["id"];
    $userFirstname = $dataAssoc["first_name"];
    $userMail = $dataAssoc["mail"];
    $userPass = $dataAssoc["password"];
    $userCreatedDate = $dataAssoc["created_date"];

?>


  <tbody>
    <tr>
      <td><?php echo "$db_serial"?></td>
      <td><?php echo "$userFirstname"?></td>
      <td><?php echo "$userMail"?></td>
      <td><?php echo "$userPass"?></td>
      <td><?php echo "$userCreatedDate"?></td>
      <td> <button type="button" class="btn btn-danger"><a href="action.php?sql_id= <?php echo $db_serial?>" style="color: white; text-decoration: none;">Delete user</a></button></td>
    </tr>
  </tbody>

  <?php 
    }
  ?>

</table>
    </div>


    <script src="./app.js"></script>
</body>
</html>



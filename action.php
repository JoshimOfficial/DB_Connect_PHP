<?php
$userDeletedId = $_REQUEST["sql_id"];

$databaseAccess = mysqli_connect("localhost", "root", "", "users");
$dataQuery = "DELETE FROM `user_sing_up_info` WHERE `user_sing_up_info`.`id` = $userDeletedId ";
$deletData = mysqli_query($databaseAccess, $dataQuery);

if($deletData) {
    header("location: index.php?delete_success");

}


?>
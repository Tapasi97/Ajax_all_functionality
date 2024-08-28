<?php

include('../inc/config.php');

if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['language']) && isset($_POST['country']) && isset($_POST['city'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $language = $_POST['language'];
    $country = $_POST['country'];
    $city = $_POST['city'];

    $insert = "INSERT INTO `user-dtls`(`name`,`gender`,`age`,`language`,`country`,`city`) VALUES('$name','$gender','$age','$language','$country','$city')";
    $query = mysqli_query($conn,$insert);

}
<?php

include('../inc/config.php');

if(isset($_POST['id'])) {
    $select_id = $_POST['id'];

    $ids = implode(",",$select_id);

    $delete = "DELETE FROM `user-dtls` WHERE `id` IN ($ids)";
    $query = mysqli_query($conn,$delete);
}
<?php

include('../inc/config.php');

/**
 * Fetch City-list w.r.t Country:
 */
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $city_select = "SELECT * FROM `city` WHERE `cntry_id`='$id'";
        $query = mysqli_query($conn,$city_select);

        $citylist = '';

        if(mysqli_num_rows($query) > 0) {
            $citylist .= '<select class="form-select" id="citySelect">
                            <option selected disabled>Select a city</option>';

            while($row = mysqli_fetch_assoc($query)) {
                $citylist .= '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
            }

            $citylist .= '</select>';
        }  

        echo $citylist;
    }
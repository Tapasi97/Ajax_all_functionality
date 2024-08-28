<?php

include('../inc/config.php');

    $limit = 6;

    $page_no = '';
    if(isset($_POST['page_no'])){
        $page_no = $_POST['page_no'];
    }else{
        $page_no = 1;
    }

    $offset = ($page_no-1) * $limit;

    $select = "SELECT * FROM `user-dtls` 
    JOIN `country` ON `user-dtls`.country=`country`.country_id
    JOIN `city` ON `user-dtls`.city=`city`.city_id 
    ORDER BY `id` DESC LIMIT $offset,$limit";
    
    $query = mysqli_query($conn,$select);

    $output = '';

    if(mysqli_num_rows($query)>0) {
        $output .='<table class="table table-bordered table-data table-striped">
                        <thead>
                            <tr>
                                <th class="text-center"><input type="checkbox" id="selectAll"></th>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Languages</th>
                                <th>Country</th>
                                <th>City</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>';
        $i = $offset+1;
        while($row = mysqli_fetch_assoc($query)) {
            $output .= '<tr>
                            <td  class="text-center"><input type="checkbox" class="chkbx" value="'.$row['id'].'"></td>
                            <td>'.$i.'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['age'].'</td>
                            <td>'.$row['language'].'</td>
                            <td>'.$row['country_name'].'</td>
                            <td>'.$row['city_name'].'</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-success" id="editBtn" data-eid="'.$row['id'].'">Edit</button>
                            </td>
                        </tr>';
                        $i++;
        }
        
        $output .= '</tbody>
                    </table>
                    <div id="pagination" class="d-flex justify-content-center">';

        $select_all = "SELECT * FROM `user-dtls`";
        $query_all = mysqli_query($conn,$select_all);

        $no_of_rows = mysqli_num_rows($query_all);
        $total_pages = ceil($no_of_rows/$limit);

        for($j=1;$j<=$total_pages;$j++){
            if($j == $page_no){
                $ac_class = 'active';
            }else{
                $ac_class = '';
            }
            $output .='<a class="btn pagebtn btn-secondary mx-1 '.$ac_class.'" id="'.$j.'">'.$j.'</a>';
        }


        $output .='</div>';
                    
        echo $output;
    }
    
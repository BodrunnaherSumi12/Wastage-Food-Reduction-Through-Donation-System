<?php
    $conn = new mysqli('localhost', 'root', '', 'project');

    if (isset($_POST['receiver_id'])) {
        //query
        $id = $_POST['receiver_id'];
        $dist_query = $conn->query("SELECT district_id FROM receivers WHERE id='$id'");
        
        if ($dist_query->num_rows > 0) {
            $dist_fetch = $dist_query->fetch_assoc();
            $dist_id = $dist_fetch['district_id'];

            $post_query = "SELECT posts.* from posts LEFT JOIN donners on donners.id=posts.donner_id WHERE donners.district_id='$dist_id' AND posts.status=0";
            $post_run = $conn->query($post_query);

            $output = [];
            $output['total_notification'] = 0;
            
            if ($post_run->num_rows > 0) {
                $output['total_notification'] = $post_run->num_rows;
                $n_list = '<ul>';
                while($post = $post_run->fetch_assoc()) {
                    $n_list .= '<li><a href="'.$post['id'].'">'.$post['title'].'</a></li>';
                }

                $n_list .= '</ul>';

                $output['data'] = $n_list;

                echo json_encode($output);
            }
            

        }

        //return output
    }
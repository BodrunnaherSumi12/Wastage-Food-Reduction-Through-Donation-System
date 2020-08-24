<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['post_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $content = htmlspecialchars(trim($_POST['content']));
        $category = htmlspecialchars(trim($_POST['category']));

        if (isset($_FILES['image'])) {
            $file_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $allow = ['jpg', 'png', 'jpeg', 'gif'];
    
            //extension
            $div = explode('.', $file_name);
            $ext = strtolower(end($div));
    

        if ($title && $content && $category) {
            $donner_id = $_SESSION['donner_id'];


            
               //check extension
        if (!in_array($ext, $allow)) {
            echo 'File must be the following type: '. implode(', ', $allow);
        } else if ($file_size > (1024*30)) {
            echo "File size should be more than 30KB";
        } else {
            $new_name = substr(md5(time()), 0, 10).'.'.$ext;
            $upload_directory = 'uploads/'.$new_name;

            if (move_uploaded_file($tmp_name, $upload_directory)) {
                echo "Uploaded successfully";
            }
        }
        
    }

    
            // store Post
            $query = "INSERT INTO posts (category_id, donner_id, title, content) VALUES('$category', '$donner_id', '$title', '$content')";
            $run = $db->store($query);
            
            if ($run) {
                $success['success_message'] = "Post added successfully";
            } else {
                $success['error_message'] = "Failed to add post ".$db->error;
            }

            $_SESSION['success'] = $success;
            header('location:../post-add.php');
            
            
        } else {
            if (empty($title)) {
                $errors['title'] = "Title field can not be empty";            
            }

            if (empty($content)) {
                $errors['content'] = "Content field can not be empty";            
            }

            if (empty($category)) {
                $errors['category'] = "Category field can not be empty";            
            }


            $_SESSION['errors'] = $errors;
            header('location:../post-add.php');
        }
        
    } else {
        header('location:../post-add.php');
    }
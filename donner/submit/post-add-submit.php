<?php
    include dirname(__FILE__).'/../../database/database.php';
    session_start();
    $db = new Database();

    $errors = [];

    if (isset($_POST['post_submit'])) {
        $title = htmlspecialchars(trim($_POST['title']));
        $content = htmlspecialchars(trim($_POST['content']));
        $category = htmlspecialchars(trim($_POST['category']));

        if ($title && $content && $category) {
            $donner_id = $_SESSION['donner_id'];
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
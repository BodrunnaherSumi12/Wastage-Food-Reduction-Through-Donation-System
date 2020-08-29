<?php
    include dirname(__FILE__).'/../database/database.php';
    
   session_start();
   $db = new Database();

    $errors = [];
    $success = [];

    if (isset($_POST['register_form'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $City = $_POST['city'];
        $Town = $_POST['town'];

        if ($name && $email && $username && $password) {
            // unique validation
            $email_exists_query = "SELECT * FROM receivers WHERE email='$email'";
            $email_exists = $db->getData($email_exists_query);

            if ($email_exists) {
                $errors['email'] = "Email already taken";
            }

            $username_exists_query = "SELECT * FROM receivers WHERE username='$username'";
            $username_exists = $db->getData($username_exists_query);

            if ($username_exists) {
                $errors['username'] = "Username already taken";
            }

            if ($email_exists || $username_exists) {
                $_SESSION['errors'] = $errors;
                header('location:../user2-register.php');
            } else {
                $pass = sha1($password);

                // store register
                $insert_query = "INSERT INTO receivers (name, email, username, password, phone, address,city,town) VALUES('$name', '$email', '$username', '$pass', '$phone', '$address','$city','$town')";
                $run = $db->store($insert_query);
    
                if ($run) {
                    $success['success_message'] = "Receiver registered successfully";
                } else {
                    $success['error_message'] = "Receiver register failed ".$db->error;
                }
    
                $_SESSION['success'] = $success;
                header('location:../user2-register.php');
            }

        } else {
            if (empty($name)) {
                $errors['name'] = "Name field can not be empty";
            }
            
            if (empty($email)) {
                $errors['email'] = "Email field can not be empty";
            }

            if (empty($username)) {
                $errors['username'] = "Username field can not be empty";
            }

            if (empty($password)) {
                $errors['password'] = "Password field can not be empty";
            }
            if (empty($phone)) {
                $errors['phone'] = "Phone field can not be empty";
            }
            if (empty($address)) {
                $errors['address'] = "address field can not be empty";
            }


            $_SESSION['errors'] = $errors;
            header('location:../user2-register.php');
        }


    }
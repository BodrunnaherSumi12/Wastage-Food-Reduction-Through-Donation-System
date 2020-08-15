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

        if ($name && $email && $username && $password) {
            // unique validation
            $email_exists_query = "SELECT * FROM users WHERE email='$email'";
            $email_exists = $db->getData($email_exists_query);

            if ($email_exists) {
                $errors['email'] = "Email already taken";
            }

            $username_exists_query = "SELECT * FROM users WHERE username='$username'";
            $username_exists = $db->getData($username_exists_query);

            if ($username_exists) {
                $errors['username'] = "Username already taken";
            }

            if ($email_exists || $username_exists) {
                $_SESSION['errors'] = $errors;
                header('location:../user-register.php');
            } else {
                $pass = sha1($password);

                // store register
                $insert_query = "INSERT INTO users (name, email, username, password, phone, address) VALUES('$name', '$email', '$username', '$pass', '$phone', '$address')";
                $run = $db->store($insert_query);
    
                if ($run) {
                    $success['success_message'] = "User registered successfully";
                } else {
                    $success['error_message'] = "User register failed ".$db->error;
                }
    
                $_SESSION['success'] = $success;
                header('location:../user-register.php');
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

            $_SESSION['errors'] = $errors;
            header('location:../user-register.php');
        }


    }
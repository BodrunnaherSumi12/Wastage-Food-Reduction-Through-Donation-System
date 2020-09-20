<?php 
    
    //include database 
     include dirname(__FILE__).'../database/database.php';
    session_start();

    $db = new Database();
    $errors = [];
    $success = [];

    $_SESSION['old_data'] = $_POST;
    
    if (isset($_POST['rec-update_profile'])) {
        //var_dump($_POST['rec-update_profile']) ; die();
   
        $id = $_POST['receiver_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
      
        if(!empty($name) && !empty($email) && !empty($username) && !empty($phone) && 
            !empty($addrress))
        {

           /* $sql = "UPDATE receivers SET name='$name',email='$email',username='$username',password='$password',phone='$phone',address='$address',division_id='$division',district_id='$district',upazilla_id='$upazilla',union_id='$union'where id='$id' ";*/

	      $sql = "UPDATE receivers SET `name`='$name',`email`='$email',`username`='$username',
                `phone`='$phone',`address`='$address' where `id`='$receiver_id' ";
            $result = $db->conn->query($sql);
            

            if($result){
                $_SESSION['message'] = "receivers ID $id Data Updated Successfully!";
            	$_SESSION['msg_type'] = "warning";
            	header('location:receiver-profile-edit.php');
            } 
            else{
                $_SESSION['message'] = " Data Can not be Updated !!";
                $_SESSION['msg_type'] = "danger";
                header('location:receiver-profile-edit.php');
            }
            
        }
        else
        {
            if (empty($name)) 
            {
                $errors['name'] = " Name Field Can not be Empty";            
            }
            
            $_SESSION['errors'] = $errors;
            header('location:receiver-profile-edit.php');
        }
         
    }
 
?>
 <?php
    include 'database/database.php';
    session_start();
  
    if (isset($_SESSION['errors'])) {
      $err = $_SESSION['errors'];
      unset($_SESSION['errors']);
  }
  if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    unset($_SESSION['success']);
  }
  if(isset($_SESSION['old_data']))
  {
    $data = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
  }
    
?>

<html>
<head>
<title> Receiver Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link href="layout/styles/form.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
<div class="row">
<div class="col-md-5 offset-md-3">
    <div class="container">

<form action="submit/user2-register-submit.php" method="POST" style="padding-top:50px;">
<div class="card-header">Receiver Registration </div>
        <div class="card-body " style="background-color:#DCDCDC">
        
            
        <?php 
            if (isset($message['success_message'])) {
                echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
            }
            if (isset($message['error_message'])) {
                echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
            }
            
            ?>

                    <div class="row">
                      <div class="form-group col-lg-6">
                        <label for="_name">Name</label><br>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="_email">Email</label><br>
                        <input type="email" name="email" id="_email" class="demo-input-box" placeholder="Enter Email">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['email'])) {
                                    echo $err['email'];
                                }
                            ?>
                        </span>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6"  >

                        <label for="_username">Username</label><br>
                        <input type="text" name="username" id="_username" class="demo-input-box" placeholder="Enter Username">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['username'])) {
                                    echo $err['username'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-lg-6">
                    <label>Password</label><br>
                        <input type="password" name="password" id="_pass" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['password'])) {
                                    echo $err['password'];
                                }
                            ?>
                        </span>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="_phone">Phone</label><br>
                        <input type="text" name="phone" id="_phone" class="demo-input-box" placeholder="Enter Phone">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['phone'])) {
                                    echo $err['phone'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="_address">Address</label><br>
                        <input type="text" name="address" id="_address" class="demo-input-box" placeholder="Enter Address">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['address'])) {
                                    echo $err['address'];
                                }
                            ?>
                        </span>
                    </div>

                    </div>
                     <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="_name">City</label><br>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                            </div>

                            <div class="form-group col-lg-6">
                        <label for="_name">Town</label><br>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                            </div>
                            </div>

            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register_form" value="Register"
                        class="btnRegister" style= color-success;>
                </div>
            </div>
        </div>
    </form>
    </div>
                            </div>
                            </div>
</body>
<?php
    $page_title = 'Home';
    // header footer
    //include 'include/footer.php';
?>
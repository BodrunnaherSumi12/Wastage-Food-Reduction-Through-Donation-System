 <?php
   $page_title = 'Home';
   // header include
   include 'include/header.php';
?>



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
                        <input type="text" name="city" id="_city" class="demo-input-box" placeholder="Enter city">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['city'])) {
                                    echo $err['city'];
                                }
                            ?>
                        </span>
                            </div>

                            <div class="form-group col-lg-6">
                        <label for="_name">Town</label><br>
                        <input type="text" name="town" id="_town" class="demo-input-box" placeholder="Enter town">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['town'])) {
                                    echo $err['town'];
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
                <div class="row">
                <div class= form-group col-lg-6>
               
                <input type="submit"
                        name="register_form" value="Register"
                        class="btn btn-succeess";>
                </div>
                <div class= form-group col-lg-6>
                <a href="index.php" class="btn btn-warning" style="float:right" >Home Page</a>
                </div>
                </div>
            </div>
        </div>
    </form>
    </div>
                          
<?php
   
    // header footer
    include 'include/footer.php';
?>
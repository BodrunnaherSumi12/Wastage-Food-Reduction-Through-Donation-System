<?php
    $page_title = 'Home';
    // header include
    include 'include/header.php';
?>

<head>
<title> Donner Registration Form</title>
<link href="layout/styles/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="submit/user-register-submit.php" method="POST">
        <div class="demo-table">
        <div class="form-head">Donner Registration Form</div>
      
            
<?php 
            if (isset($message['success_message'])) {
                echo '<div class="alert alert-success">'.$message['success_message'].'</div>';
            }
            if (isset($message['error_message'])) {
                echo '<div class="alert alert-danger">'.$message['error_message'].'</div>';
            }
            
            ?>


                      <div class="form-group">
                        <label for="_name">Name</label>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_email">Email</label>
                        <input type="email" name="email" id="_email" class="demo-input-box" placeholder="Enter Email">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['email'])) {
                                    echo $err['email'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_username">Username</label>
                        <input type="text" name="username" id="_username" class="demo-input-box" placeholder="Enter Username">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['username'])) {
                                    echo $err['username'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_pass">Password</label>
                        <input type="password" name="password" id="_pass" class="demo-input-box" placeholder="Enter Name">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['password'])) {
                                    echo $err['password'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_phone">Phone</label>
                        <input type="text" name="phone" id="_phone" class="demo-input-box" placeholder="Enter Phone">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['phone'])) {
                                    echo $err['phone'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="_address">Address</label>
                        <input type="text" name="address" id="_address" class="demo-input-box" placeholder="Enter Address">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['address'])) {
                                    echo $err['address'];
                                }
                            ?>
                        </span>
                    </div>



                    <div class="form-group">
                        <label for="_name">City</label>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter City">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                            </div>

                            <div class="form-group">
                        <label for="_name">Town</label>
                        <input type="text" name="name" id="_name" class="demo-input-box" placeholder="Enter Town">
                        <span class="text-danger">
                            <?php 
                                if(isset($err['name'])) {
                                    echo $err['name'];
                                }
                            ?>
                        </span>
                            </div>


            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register_form" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>

<?php
    $page_title = 'Home';
    // header footer
    include 'include/footer.php';
?>
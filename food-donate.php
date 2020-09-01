<?php 
   $page_title = 'Donations';
    include dirname(__FILE__). '/include/header.php';
    $conn = new mysqli('localhost', 'root', '', 'project');

    if ($conn->connect_error) {
        die('database connection failed');
    }

    $query = "SELECT * FROM divisions ORDER BY name ASC";
    $run = $conn->query($query);

    if (isset($_SESSION['file_errors'])) {
        $file_err = $_SESSION['file_errors'];
        unset($_SESSION['file_errors']);
    }
?>
<div class=container>
   <div class="card">

         <div class="card-header text-center">
             <h4 class="pb-3">FOOD AID</h4>
             <hr style=" border: 1px solid lightgray; margin:0 15px 15px;">
          </div>

        <div class ="card-body">
        <div class="form-row">
         <div class="form-group col-md-6">
           <label for="inputEmail4">Food Amount(KG)</label>
           <input type="number" required min="1kg" class="form-control add-amount" name="amount" id="amount" placeholder="Enter Amount In English" value="" max="500kg">
          </div>
          <div class="form-group col-md-6">
           <label for="inputEmail4">Food Type</label>
           <select class="form-control select2" name="food-type" id="" required>
                <option value="2" selected>
                   Rice Type
                </option>
                <option value="1">
                    Snacks Type
                 </option>
                 <option value="1">
                    Fruits
                 </option>
                 <option value="1">
                    Others
                 </option>
            </select>
          </div>
          </div>

          <div class="form-row">
         <div class="form-group col-md-6">
           <label for="inputEmail4">Name</label>
           <input type="text" class="form-control" name="donor_name" id="donor_name" placeholder="Enter Your Name" value="">
          </div>
        <div class="form-group col-md-6">
        <div class="form-group col-lg-12">
                        <label for="">Upload Image</label>
                        <input type="file" name="image" class="form-control">
                        <span class="text-danger">
                            <?php 
                               if(isset($file_err)) {
                                echo implode(' | ', $file_err);
                            }
                            if(isset($err['file_error'])) {
                                $err['file_error'];
                            }
                            ?>
                        </span>
                    </div>
            <span style="color:#e83e8c; font-size: 13px; width: auto; float: left; "><i class="fa fa-hand-o-right" aria-hidden="true">
          </i> File Type: jpg,jpeg,png,pdf,Max Size:1MB </span>
         </div>
        </div>
       
      <div class="row">
                    <div class="form-group col-lg-6">
                    <div class="form-group">
                                <label for="">Division</label>
                                <select name="division"  class="form-control" id="division">
                                    <option value="">Select Division</option>
                                    <?php 
                                        if ($run->num_rows > 0) {
                                            while($division = $run->fetch_assoc()) {
                                                ?>
                                                    <option value="<?php echo $division['id']; ?>"><?php echo $division['name']; ?></option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        <span class="text-danger">
                         
                        </span>
                            </div>

                            <div class="form-group col-lg-6">
                            <div class="form-group">
                                <label for="">District</label>
                                <select name="district" id="district"  class="form-control">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                        <span class="text-danger">
                          
                        </span>
                            </div>
                            </div>
                     
                            <div class="row">


                            <div class="form-group col-lg-6">
                            <div class="form-group">
                            <label for="">Upazilla</label>
                                <select name="upazilla"  id="upazilla" class="form-control">
                                    <option value="">Select Upazila</option>
                                </select>
                            </div>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['upazilla'])) {
                                    echo $err['upazilla'];
                                }
                            ?>
                        </span>
                            </div>

                            
                            <div class="form-group col-lg-6">
                            <div class="form-group">
                            <label for="">Union</label>
                                <select name="union" id="union" class="form-control" >
                                    <option value="">Select Union</option>
                                </select>
                            </div>
                        <span class="text-danger">
                            <?php 
                                if(isset($err['union'])) {
                                    echo $err['union'];
                                }
                            ?>
                        </span>
                            </div>



                            </div>
                           
                            <div class="form-row">
         <div class="form-group col-lg-12 ">
           <label for="">Content</label>
           <input type="textarea" class="form-control" name="donor_name" id="donor_name" placeholder="Enter Your Description" value="">
          </div>
      </div>

        
      <div>
         <button type="button" class="btn btn-primary btn-lg btn-block">Submit Now</button>

      </div>

    </div>
    <div class="card-footer">
    </div>

   </div>

</div>




<?php
   
    include 'include/footer.php';
?>
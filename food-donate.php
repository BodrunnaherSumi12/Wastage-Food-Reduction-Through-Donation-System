<?php 
   $page_title = 'Donations';
    include dirname(__FILE__). '/include/header.php';
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
           <select class="form-control select2" name="currency_id" id="currency_id" required>
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
           <label for="inputPassword4">Food Picture</label>
           <input type="file" id="attachment" class="form-control" name="attachment">

            <span style="color:#e83e8c; font-size: 13px; width: auto; float: left; "><i class="fa fa-hand-o-right" aria-hidden="true">
          </i> File Type: jpg,jpeg,png,pdf,Max Size:1MB </span>
         </div>
        </div>


        <div class="form-row">
         <div class="form-group col-md-6">
           <label for="inputEmail4">Area</label>
           <input type="text" class="form-control" name="donor_name" id="donor_name" placeholder="Enter Your Area" value="">
          </div>
          <div class="form-group col-md-6">
           <label for="inputEmail4">Location</label>
           <input type="text" class="form-control" name="donor_name" id="donor_name" placeholder="Enter Your location" value="">
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
<?php 
   $page_title = 'Donners list';
    include dirname(__FILE__). '/include/header.php';
    $db = new Database();
  $query = "SELECT id,name,email,phone,address FROM donners";
    $posts = $db->getData($query);
  // ver_dump(query);
  // die();
?>


<div class="container">
       
       <div class="card-header-action">
          <!--<a href="post-add.php" class="btn btn-primary">Add new post</a>-->
       </div>
   </div>


   <div class="card-columns">
   
  
            <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>



                                <div class="card bg-dark text-white">
                                <img class="card-img" src="..." alt="Card image">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['id']; ?></h5>
                                    <h6 class="card-text"><?php echo $post['name']; ?></h6>
                                    <p class="card-text"><?php echo $post['email']?></p>
                                    <p class="card-text"><?php echo $post['phone']?></p>
                                    <p class="card-text"><?php echo $post['address']?></p>
                                 </div>
                                </div>
                    <?php
                            }
                        } else {
                     ?>
                            <div>
                                <td>No Post found</td>
                            </div>
                        <?php
                        }
                        ?>
                    
                         
    </div>
  </div>
  <?php
    $page_title = 'Home';
    // header footer
    include 'include/footer.php';
?>
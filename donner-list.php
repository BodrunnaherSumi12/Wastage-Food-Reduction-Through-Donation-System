<?php 
   $page_title = 'Donners list';
    include dirname(__FILE__). '/include/header.php';
    $db = new Database();
  $query = "SELECT id,name,email,phone,address FROM donners";
    $posts = $db->getData($query);
  // ver_dump(query);
  // die();
?>


  <body>
  <div class="container">
  <body>
  <div class="card-deck">
 
 <div class='col-md-6 offset-md-3' style= padding-top:50px; padding-down:50px;> 
 
   
            <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>

<div class="card mb-6" style="max-width: 640px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post['id']; ?></h5>
        <p class="card-text"><?php echo $post['name']; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $post['email']; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $post['phone']; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $post['address']; ?></small></p>

      </div>
    </div>
  </div>
</div>


                    
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Data Found</td>
                            </tr>
                        <?php
                        }
                    ?>
           
        </table>
    </div>
    
  </body>
  <?php
    $page_title = 'Home';
    // header footer
    include 'include/footer.php';
?>
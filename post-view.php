<?php
    $page_title = 'Blog Details';
    // header include
    include dirname(__FILE__). '/include/header.php';
    // contents include
    //include dirname(__FILE__). '/includes/dashsidebar.php';
   $db = new Database();

    if(isset($_GET['id'])){
        $id=$_GET['id'];
       
        
        //$query = "SELECT * FROM uposts WHERE id='$id'";
        $query = "SELECT posts.*, categories.name as category_name, users.name as user_name FROM `uposts` 
            LEFT JOIN categories ON uposts.category_id=categories.id 
        
            WHERE posts.id = '$id'";
        $posts =  $db->conn->query($query);
        $post = $posts->fetch_assoc();

      
    }
?>
 
        <div class="container">
        <div class="card">
                                
                                <div class="card-body">
                                <img class="img-fluid rounded-circle w-50 mb-3" src="donner/uploads/<?php echo $post['photo']; ?>"alt="Card image cap"></img> 
                                   <h5 class="card-title"></h5>
                                   <h6 class="card-text"></h6>
                                   <p class="card-text"></p>
                                   <p class="card-text"><small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?></small></p>
                                   <a href="post-view.php" class="btn btn-primary">Confirm</a>
                                </div>
                               </div>
                                 
                    <div class="card-footer" >
                      
                    </div>
                </div>
            
        </div>  
    </div>
</div>
<?php
    // footer include
    include dirname(__FILE__). '/include/footer.php';
?>
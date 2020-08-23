<?php
    $page_title = 'Posts list';
  
    include dirname(__FILE__). '/include/header.php';
  
   // session_start();
    $db = new Database();
    
    $query = "SELECT posts.*, categories.name as category_name, donners.name as donner_name FROM `posts`
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN donners ON posts.donner_id=donners.id";
    $posts = $db->getData($query);
    
    //var_dump($query) ; die();
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


                              <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap" >
                                 <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                    <h6 class="card-text"><?php echo $post['category_name']; ?></h6>
                                    <p class="card-text"><?php echo $post['content']?></p>
                                    <p class="card-text"><small class="text-muted"><?php $d=strtotime($post['created_at']); echo date("d M, Y",$d); ?></small></p>
                                    <a href="#" class="btn btn-primary">see more</a>
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
                </tbody>
            </table>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/include/footer.php';
?>
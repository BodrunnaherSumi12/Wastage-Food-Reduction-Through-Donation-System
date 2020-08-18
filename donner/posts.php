<?php
    $page_title = 'Posts list';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT posts.*, categories.name as category_name, donners.name as donner_name FROM `posts`
            LEFT JOIN categories ON posts.category_id=categories.id 
            LEFT JOIN donners ON posts.donner_id=donners.id";
    $posts = $db->getData($query)
?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Post list</h3>
            <div class="card-header-action">
                <a href="post-add.php" class="btn btn-primary">Add new post</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                                    <tr>
                                       <td><?php echo $post['id']; ?></td>
                                       <td><?php echo $post['title']; ?></td>
                                       <td><?php echo $post['category_name']; ?></td>
                                       <td><?php echo $post['content']; ?></td>
                                       <td><?php echo $post['donner_name']; ?></td>
                                       <td><?php echo $post['created_at']; ?></td>
                                       <td>
                                           <a href="">Edit</a>
                                           <a href="">Delete</a>
                                       </td>
                                    </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td>No Post found</td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    // footer include
    include dirname(__FILE__). '/includes/footer.php';
?>
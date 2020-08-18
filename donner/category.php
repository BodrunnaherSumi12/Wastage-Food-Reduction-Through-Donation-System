<?php
    $page_title = 'Category List';
    // header include
    include dirname(__FILE__). '/includes/header.php';
    $query = "SELECT * FROM categories";
    $categories = $db->getData($query)
?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category List</h3>
            <div class="card-header-action">
                <a href="category-add.php" class="btn btn-primary">Add new Category</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($categories) {
                            while($category = $categories->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $category['id'] ?></td>
                                        <td><?php echo $category['name'] ?></td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                            }
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
<?php 
   $page_title = 'Receivers list';
    include dirname(__FILE__). '/include/header.php';
    $db = new Database();
  $query = "SELECT id,name,email,phone,address FROM donners";
    $posts = $db->getData($query);
  // ver_dump(query);
  // die();
?>


  <body>
 
    <div class='col-md-6 offset-md-3' style= padding-top:50px;> 
        <table border ="1px" style="width:600px; line-height:35px; margin:20px;">
            <tr>
                <th colspan="11" style="text-align:center; background: #9D0552; color:white;"><h2>Registerd Donner</h2></th>
            </tr>
            <tr >
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">ID</th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Name </th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Email</th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Phone</th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Adress</th>
               
               
            </tr>
            <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                    <tr>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['id']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['name']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['email']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['phone']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['address']; ?></td>
                       
                      
                    </tr>
                    
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
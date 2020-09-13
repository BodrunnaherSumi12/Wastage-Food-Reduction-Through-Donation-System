<?php 
   $page_title = 'Receivers list';
    include dirname(__FILE__). '/include/header.php';
    $db = new Database();
  $query = "SELECT id,food_type,food_amount,photo,name,receiver FROM donations";
    $posts = $db->getData($query);
  // ver_dump(query);
  // die();
?>


  <body>
 
    <div class='col-md-6 offset-md-3' style= padding-top:50px;> 
        <table border ="1px" style="width:600px; line-height:35px; margin:20px;">
            <tr>
                <th colspan="11" style="text-align:center; background: #9D0552; color:white;"><h2>Registerd Receivers</h2></th>
            </tr>
            <tr >
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">ID</th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Food Type </th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Amount(KG)</th>
               
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Donner Name</th>
                <th style="text-align:center;color:#9D0552; border:2px solid #9D0552;background:white;padding: 7px;">Receiver ID</th>
               
               
            </tr>
            <?php
                        if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                    <tr>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['id']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['food_type']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['food_amount']; ?></td>

                        <td style="text-align:center;padding: 5px;"><?php echo $post['name']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $post['receiver']; ?></td>
                       
                      
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
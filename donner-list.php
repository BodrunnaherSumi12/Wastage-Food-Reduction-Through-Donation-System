<?php 
    include('include/header.php');
  //  include ('database/database.php');
    $query= "SELECT id,name,email,phone,address FROM donners";
   // $posts = $db->getData($query);
   // ver_dump(query);
   //die();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Donner List</title>
  </head>
  <body>
 
    <div class='col-md-6 offset-md-1'> 
        <table border="3px" style="width:600px; line-height:35px; margin:20px;">
            <tr>
                <th colspan="11" style="text-align:center; background: #dc3545; color:white;"><h2>Registerd Donners</h2></th>
            </tr>
            <tr >
                <th style="text-align:center;color:#dc3545; border:2px solid #dc3545;background:white;padding: 7px;">ID</th>
                <th style="text-align:center;color:#dc3545; border:2px solid #dc3545;background:white;padding: 7px;">Name </th>
                <th style="text-align:center;color:#dc3545; border:2px solid #dc3545;background:white;padding: 7px;">Email</th>
                <th style="text-align:center;color:#dc3545; border:2px solid #dc3545;background:white;padding: 7px;">Phone</th>
                <th style="text-align:center;color:#dc3545; border:2px solid #dc3545;background:white;padding: 7px;">Adress</th>
               
               
            </tr>
            <?php
                         if ($posts) {
                            while($post = $posts->fetch_assoc()) {
                                ?>
                    <tr>
                        <td style="text-align:center;padding: 5px;"><?php echo $rows['id']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $rows['name']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $rows['Email']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $rows['Phone']; ?></td>
                        <td style="text-align:center;padding: 5px;"><?php echo $rows['Address']; ?></td>
                       
                      
                    </tr>
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
</html>
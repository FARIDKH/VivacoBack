<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLIENTS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-8">
           <button class="btn btn-success"><a href="update.php">UPDATE</a></button>
            <table class="table table-bordered">
                <th>ID</th>
                <th>TEXT</th>
                <th>ACTION</th>
                <?php 
                
                include "../db.php";
                
                $sql = "SELECT * FROM clients";
                $query = mysqli_query($db_con,$sql);
    
                while($row = mysqli_fetch_assoc($query)){
                    ?> <tr> <?php
                       
                    foreach ($row  as $key => $value){
                        ?> <td><?= $value ?></td> <?php
                    }
                        
                        
                  ?>  
                  <td>
                      
                      <a class="btn btn-warning" href="update.php?id=<?= $row['id'] ?>">UPDATE</a>
                      
                  </td>
                  
                  </tr><?php
                }
                
                ?>
            </table>
        </div>
        <button class="btn btn-default"><a href="../admin.php">BACK to ADMIN PANEL</a></button>
    </div>
</body>
</html>
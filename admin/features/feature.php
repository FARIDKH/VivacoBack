<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FEATURES</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <div class="col-md-9">
           <button class="btn btn-warning"><a href="create.php">CREATE</a></button>
            <table class="table table-bordered">
                <th>ID</th>
                <th>CLASSNAME</th>
                <th>HEADER</th>
                <th>INFO</th>
                <th colspan="2">ACTION</th>
                <?php 
                
                include "../db.php";
                
                $sql = "SELECT * FROM features";
                $query = mysqli_query($db_con,$sql);
                while($row = mysqli_fetch_assoc($query)){
                    ?> <tr> <?php 
                    foreach($row as $key => $value){
                        ?> <td><?= $value ?></td> <?php
                    } ?>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?= $_GET['id'] ?>">DELETE</a>
                        </td>
                      </tr> <?php
                }
                
                
                ?>
            </table>
       </div>
    </div>
    
</body>
</html>
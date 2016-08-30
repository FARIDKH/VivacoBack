<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
       <div class="col-md-8">
            <h1>ABOUT</h1>
            <button class="alert alert-success"><a href="create.php">CREATE</a></button>
            <table class="table table-bordered">
                <th>ID</th>
                <th>IMG</th>
                <th>INFO</th>
                <tbody>
                    <?php
                    
                    include "../db.php";
                    
                    $sql = "SELECT * FROM about1 ORDER BY id DESC";
                    $query = mysqli_query($db_con,$sql);
                    
                    
                    while($row = mysqli_fetch_assoc($query)){ 
                        ?> <tr> <?php
                        foreach($row as $key => $value){
                            ?> <td><?= $value ?></td> <?php
                        } ?>  </tr> <?php
                    }
                    
                    
                    
                    ?>
                </tbody>
            </table>       
        </div>
    </div>
    
    
    
    
</body>
</html>
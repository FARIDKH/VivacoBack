<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELETE FEATURE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   <?php
    
    include "../db.php";
    
    $id = $_GET['id'];
    
    
    
    ?>
   
    <div class="container">
        <div class="col-md-8">
            <h1>DELETE FEATURE</h1>
            <div class="col-md-12 alert alert-danger">
               <form action="" method="post">
                    <input type="submit" class="btn btn-danger" value="YES" name="feature_delete">
                    <input type="submit" class="btn btn-default" value="NO" name="feature_delete">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
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
        $sql = "SELECT * FROM features";
        $query = mysqli_query($db_con,$sql);
        $row = mysqli_fetch_assoc($query);

        $id = $_GET['id']; 
    if(isset($_POST['feature_deleteYES'])){
        
        
        $sql1 = "DELETE FROM features WHERE id = $id";
        $query1 = mysqli_query($db_con,$sql1);
        $row1 = mysqli_fetch_assoc($query1);

        header ("Location:feature.php");    
    }
    
    
    ?>
   
    <div class="container">
        <div class="col-md-8">
            <h1>DELETE FEATURE</h1>
            <div class="col-md-12 alert alert-danger">
               <form action="" method="post">
                    <input type="submit" class="btn btn-danger" value="YES" name="feature_deleteYES">
                    <input type="submit" class="btn btn-default" value="NO" name="feature_deleteNO">
                </form>
            </div>
        </div>
        <button class="btn btn-default"><a href="feature.php">BACK to ADMIN PANEL</a></button>
        <button class="btn btn-default"><a href="feature.php">BACK to FEATURE</a></button>
    </div>
</body>
</html>
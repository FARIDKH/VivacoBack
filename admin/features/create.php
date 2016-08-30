<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php



if(isset($_POST['feature_submit'])){
    include "../db.php";

    $class = $_POST['feature_class'];
    $info = $_POST['feature_info'];
    $header = $_POST['feature_header'];

    
    
    $sql = "INSERT INTO features(class,header,info) VALUES ('$class','$header','$info')";
    
    $query = mysqli_query($db_con,$sql);
    
    
    
    
    
}


?>

    <div class="container">
       <div class="col-md-8">
            <form action="" method="post">
                CLASS <input type="text" class="form-control" name="feature_class">
                HEADER <input type="text" class="form-control" name="feature_header">
                INFO <textarea type="text" class="form-control" name="feature_info"></textarea>
                <input type="submit" name="feature_submit">
            </form>
        </div>
        <button class="btn btn-default"><a href="feature.php">BACK</a></button>
    </div>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <?php 
           
               include "../db.php";
                    
           if(isset($_POST['aboutSubmit'])){
            
               $target_dir = "img/";
               $target_file = $target_dir . basename($_FILES["about1IMG"]["name"]);
               
               $img = $_FILES["about1IMG"]["name"];
               $info = $_POST['about1INFO'];
               move_uploaded_file($_FILES["about1IMG"]["tmp_name"],$target_file);
               
                $sql = "INSERT INTO about1( img,info) VALUES ('$img','$info')";
                $query =  mysqli_query($db_con,$sql);
                
                
               
               
           }else{
               
           }
    ?>
  <div class="container">
       <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data"> 
                    IMG <input type="file" class="form-control" name="about1IMG">
                    INFO <textarea class="form-control" name="about1INFO"></textarea>
                    <input type="submit" name="aboutSubmit">
            </form>
            
            
        </div>
    </div> 
    
</body>
</html>
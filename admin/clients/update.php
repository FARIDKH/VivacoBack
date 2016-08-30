<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php
    
    include "../db.php";
    
    $text = $_POST['client_text'];
    $id = $_GET['id'];
    
   
    if(isset($_POST['client_submit'])){
        $sql = "UPDATE clients SET text = '$text' WHERE id = '$id' ";
        $query = mysqli_query($db_con,$sql);
    }
    
    ?>
   
   <div class="container">
      <h1>UPDATE CLIENTS</h1>
       <div class="col-md-8">
        <form method="post">

            TEXT FOR CLIENT <textarea name="client_text" id="client_text" class="form-control" cols="20" rows="5"></textarea>
            
            
            <input type="submit" value="submit" name="client_submit">
        </form>
       </div>
        <button class="btn btn-default"><a href="client.php">BACK</a></button>
   </div>
</body>
</html>
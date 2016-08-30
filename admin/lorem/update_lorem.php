<?php 

    include "../db.php";

if(isset($_POST['loremSubmit'])){
   $target_dir1 = "uploads/lorem1/";
   $target_file1 = $target_dir1 . basename($_FILES["firstLorem"]["name"]);

   $img1 = $_FILES["firstLorem"]["name"];
   move_uploaded_file($_FILES["firstLorem"]["tmp_name"],$target_file1);
    
    
    
    
    $sql1 = "UPDATE lorem1 SET img = '$img1' WHERE id = 1 ";
    $query1 = mysqli_query($db_con,$sql1);
    
    
    $row = mysqli_fetch_assoc($query1);
    
    
    
    $target_dir2 = "uploads/lorem2/";
   $target_file2 = $target_dir2 . basename($_FILES["secondLorem"]["name"]);

   $img2 = $_FILES["secondLorem"]["name"];
   move_uploaded_file($_FILES["secondLorem"]["tmp_name"],$target_file2);
    
    
    
    
    $sql2 = "UPDATE lorem2 SET img = '$img2' WHERE id = 1 ";
    $query2 = mysqli_query($db_con,$sql2);
    
    
    $row2 = mysqli_fetch_assoc($query2);  
    
    
    //
    
    
    
    $target_dir3 = "uploads/lorem3/";
    $target_file3 = $target_dir3 . basename($_FILES["thirdLorem"]["name"]);

    $img3 = $_FILES["thirdLorem"]["name"];
    move_uploaded_file($_FILES["thirdLorem"]["tmp_name"],$target_file3);
    
    
    
    
    $sql3 = "UPDATE lorem3 SET img = '$img3' WHERE id = 1 ";
    $query3 = mysqli_query($db_con,$sql3);
    
    
    $row3 = mysqli_fetch_assoc($query3);  
    
    header ('Location:lorem.php');
}else{
    header ('Location:lorem.php');
}


?>
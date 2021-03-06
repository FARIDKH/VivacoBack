<!DOCTYPE html>
<html>
   <head>
       <title>PHP - ADMIN PANEL</title>
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   </head>
       <style>
    
           input{
               width:200px  !important;
           }
           img{
               width:200px;
            }
           
        </style>
<body>

    <?php
    $emptyError=false;
    
    if(isset($_POST["create"])){
        
        
    
        include "db.php";
        
        
        
        $title = $_POST['title'];
        $text = $_POST['text'];
        $img = $_FILES["img"]["name"];
        
        
        if(!empty($img) && !empty($title) && !empty($text)){
                        
        
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
            
              
                
            move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
            
            $id = $_GET['id'];
            
            $sql1 = "SELECT * FROM news WHERE id = $id";
            $query1 =  mysqli_query($db_con,$sql1);
            $row = mysqli_fetch_assoc($query1);
            
            $prevImg = $row['img'];
            $prevTitle = $row['title'];   
            $prevText = $row['text'];  
            
            $sql = "UPDATE news SET img = $img , title = $title , text  = $text WHERE img = $prevImg , title = $prevTitle , text  = $prevText";
            $query=mysqli_query($db_con,$sql);
            

            if($query){
                header ('Location:admin.php');
            }
            
        }else{
           $emptyError = "Fill all gaps";
        }
        
    }else{
        
    }
    
    
    
    
    ?>    

    <div class="container">
        <h1>Create a Customer</h1>
        
        <?php if($emptyError) { ?>
            <div class="alert alert-danger">


                <p><?= $emptyError  ?></p>


            </div>
          
        <?php }  ?>
           <div class="col-md-12">
               <div class="col-md-2">
                    <ul class="list-unstyled text-right">
                        <li>Image</li><br><br>
                        <li>Title</li><br><br>
                        <li>Text</li><br><br>
                    </ul>
                </div>  
                
                <form action="" method="post" enctype="multipart/form-data">  
                    <div class="col-md-10">              
                            <ul class="list-unstyled text-left">
                                <li>

                                    <input type="file"  name="img">

                                </li><br>

                                <li>

                                    <input type="text" class="form-control" name="title" placeholder="title">

                                </li><br>

                                <li>
                                    <textarea  class="form-control" name="text" placeholder="text"></textarea>
                                </li><br><br>

                            </ul>

                    </div>
        
                   <div style="background-color:gray; padding:50px;" class="col-md-12">
                        <input type="submit" class="col-md-offset-2 btn btn-success" name="create" value="CREATE">
                        <button class="btn btn-default" name="back"><a href="admin.php">BACK</a></button>
                    </div>
                </form>
                 
            </div>    
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOREM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
       <h1>UPDATE LOREM</h1>
        <div class="col-md-8">
            <form action="update_lorem.php" method="post"  enctype="multipart/form-data">
                IMG for LOREM1 <input type="file" name="firstLorem" class="form-control">
                IMG for LOREM2 <input type="file" name="secondLorem" class="form-control">
                IMG for LOREM3 <input type="file" name="thirdLorem" class="form-control">
                <input type="submit" name="loremSubmit">
            </form>
        </div>
    </div>
</body>
</html>
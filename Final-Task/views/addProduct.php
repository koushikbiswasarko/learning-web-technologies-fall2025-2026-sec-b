<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>

    <form method="post" action="../controllers/addCheck.php" enctype="">
        <fieldset style="width:360px;">
            <legend><b>ADD PRODUCT</b></legend>

            Name<br>
            <input type="text" name="name" value="" ><br>

            Buying Price<br>
            <input type="text" name="buy" value="" ><br>

            Selling Price<br>
            <input type="text" name="sell" value="" ><br>

            <hr>

            <input type="checkbox" name="display" value="Yes"> Display

            <hr>

            <input type="submit" name="save" value="SAVE">
            <a href="display.php"><input type="button" value="Back"></a>
        </fieldset>
    </form>
    
</body>
</html>
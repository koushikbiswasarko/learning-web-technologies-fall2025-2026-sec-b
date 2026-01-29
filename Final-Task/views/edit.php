<?php
    require_once('../models/productModel.php');

    $id = $_GET['id'];
    $row = getProductById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>

    <form action="../controllers/editCheck.php" method="post" enctype="">
        <fieldset style="width:300px;">
            <legend><b>EDIT PRODUCT</b></legend>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            Name<br>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

            Buying Price<br>
            <input type="text" name="buy" value="<?php echo $row['buying_price']; ?>"><br>

            Selling Price<br>
            <input type="text" name="sell" value="<?php echo $row['selling_price']; ?>"><br>

            <hr>

            <input type="checkbox" name="display" value="Yes"
                <?php if($row['display'] == 'Yes'){ echo "checked"; } ?>
            > Display

            <hr>

            <input type="submit" name="save" value="SAVE">
            <a href="display.php"><input type="button" value="Back"></a>
        </fieldset>
    </form>

</body>
</html>

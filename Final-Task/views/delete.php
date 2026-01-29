<?php
    require_once('../models/productModel.php');

    $id = $_GET['id'];
    $row = getProductById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Product</title>
</head>
<body>

    <form action="../controllers/deleteCheck.php" method="post" enctype="">
        <fieldset style="width:300px;">
            <legend><b>DELETE PRODUCT</b></legend>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            Name: <?php echo $row['name']; ?><br>
            Buying Price: <?php echo $row['buying_price']; ?><br>
            Selling Price: <?php echo $row['selling_price']; ?><br>
            Displayable: <?php echo $row['display']; ?><br>

            <hr>

            <input type="submit" name="delete" value="Delete">
            <a href="display.php"><input type="button" value="Back"></a>
        </fieldset>
    </form>

</body>
</html>

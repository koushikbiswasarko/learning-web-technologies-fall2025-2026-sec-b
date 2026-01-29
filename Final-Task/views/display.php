<?php
    require_once('../models/productModel.php');

    $result = getAllDisplayProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>
</head>
<body>

    <fieldset style="width:100px;">
        <legend><b>DISPLAY</b></legend>

        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)){ 
                
                $profit = $row['selling_price'] - $row['buying_price'];
            ?>

            <tr>
                <td><?php echo $row['name']; ?></td>

                <td><?php echo $profit; ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                </td>

                <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
                </td>
            </tr>

            <?php } ?>

        </table>

    </fieldset>
    <br><br>
    
    <a href="addProduct.php"><input type="button" value="Add Product"></a>
    <a href="search.php"><input type="button" value="Search Product"></a>

</body>
</html>

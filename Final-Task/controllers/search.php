<?php
    require_once('../models/productModel.php');

    $name = $_GET['name'];
    $result = searchProduct($name);
?>

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
            <a href="../views/edit.php?id=<?php echo $row['id']; ?>">edit</a>
        </td>

        <td>
            <a href="../views/delete.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

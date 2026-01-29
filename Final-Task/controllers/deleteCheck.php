<?php
    require_once('../models/productModel.php');

    if(isset($_POST['delete'])){

        $id = $_REQUEST['id'];
        $status = deleteProduct($id);

        if($status){
            header('location: ../views/display.php');
        }else{
            header('location: ../views/delete.php?id='.$id);
        }

    }else{
        header('location: ../views/display.php');
    }

?>
<?php
    require_once('../models/productModel.php');

    if(isset($_POST['save'])){

        $id   = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $buy  = $_REQUEST['buy'];
        $sell = $_REQUEST['sell'];

        if(isset($_POST['display'])){
            $display = "Yes";
        }else{
            $display = "No";
        }

        if($name == "" || $buy == "" || $sell == ""){
            echo "null value!";
        }else{
            $product = ['id'=>$id, 'name'=>$name, 'buy'=>$buy, 'sell'=>$sell, 'display'=>$display];
            $status = updateProduct($product);

            if($status){
                header('location: ../views/display.php');
            }else{
                header('location: ../views/edit.php?id='.$id);
            }
        }

    }else{
        header('location: ../views/display.php');
    }

?>
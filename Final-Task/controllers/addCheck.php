<?php
    require_once('../models/productModel.php');

    if(isset($_POST['save'])){

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
        }
        else{

            $product = [
                'name'    => $name,
                'buy'     => $buy,
                'sell'    => $sell,
                'display' => $display
            ];

            $status = addProduct($product);

            if($status){
                header('location: ../views/display.php');
            }
            else{
                header('location: ../views/addProduct.php');
            }
        }
    }
    else{
        header('location: ../views/addProduct.php');
    }
?>

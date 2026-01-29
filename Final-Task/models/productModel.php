<?php
require_once('db.php');

function addProduct($product){
    $con = getConnection();
    $sql = "insert into products values(null, '{$product['name']}', '{$product['buy']}', '{$product['sell']}', '{$product['display']}')";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getAllDisplayProduct(){
    $con = getConnection();
    $sql = "select * from products where display='Yes'";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getProductById($id){
    $con = getConnection();
    $sql = "select * from products where id={$id}";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function updateProduct($product){
    $con = getConnection();
    $sql = "update products set 
                name='{$product['name']}',
                buying_price='{$product['buy']}',
                selling_price='{$product['sell']}',
                display='{$product['display']}'
            where id={$product['id']}";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function deleteProduct($id){
    $con = getConnection();
    $sql = "delete from products where id={$id}";
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function searchProduct($name){
    $con = getConnection();
    $sql = "select * from products where display='Yes' and name like '%{$name}%'";
    return mysqli_query($con, $sql);
}


?>
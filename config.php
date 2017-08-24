<?php
/**
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/24/2017
 * Time: 8:24 AM
 */
function getdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "stage1";

    try{

        $conn = mysqli_connect($servername,$username,$password,$db);
        //echo "Connected succesfully";
    }
    catch(exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;

}
?>


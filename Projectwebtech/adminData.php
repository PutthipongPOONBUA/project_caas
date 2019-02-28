<?php
require './db.php';
$sql = "select * from admin";
$result = mysqli_query($connect,$sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo "asdasd";
    $userlog = $_POST["__username"];
    $passlog = $_POST["__password"];
    if($result){
        while($record = mysqli_fetch_array($result,MYSQLI_NUM)){
            $username = $record[1];
            $password = $record[2];
            if($userlog == $username && $passlog == $password){
                header ('Location: ./admin_core/admin.php');
            }else{
                echo"Username or Password is incorrect.";
            }
        }
    }else{
        echo"cannot find data";
    }
}
?>

<?php
require "connect.php";

$username1=$_POST["username"];
$password1=$_POST["password"];
if (!empty($username1)&&!empty($password1)){
    $sql=" INSERT INTO taikhoan(username,password)
     VALUES(N'$username1',N'$password1')";
     if ($conn->query($sql)===True)
     echo "connect succes";
    
}
?>
<?php 
require 'conn.php';
if(isset($_POST['title'])){
    $title=$_POST['title'];
    if(empty($title)){
        header("location:index.php");
    }
    else{
        $stmt=$conn->prepare("INSERT INTO todos(title) Value (?)");
        $res=$stmt->execute([$title]);
        if($res){
            header("location:index.php");
        }
    }

}
?>
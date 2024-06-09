<?php 
require 'conn.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    if(empty($id)){
        header("location:index.php");
    }
    else{
        $stmt=$conn->prepare("DELETE FROM todos WHERE id=?");
        $res=$stmt->execute([$id]);
        if($res){
            header("location:index.php");
        }
    }

}
?>
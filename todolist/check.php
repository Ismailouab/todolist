<?php 
require 'conn.php';
if(isset($_POST['id'])){
    $id=$_POST['id'];
    if(empty($id)){
        header("location:index.php");
    }
    else{
        $todos=$conn->prepare("SELECT id,checked FROM todos WHERE id=?");
        $todos->execute([$id]);

        $todo=$todos->fetch();
        $ID=$todo['id'];
        $checked=$todo['checked'];

        $uchecked= $checked ? 0 : 1;

        $res=$conn->query("UPDATE todos SET checked=$uchecked WHERE id=$ID");

        if($res){
            echo $checked;
        }else{
            echo "error";
        }
    }

}
?>
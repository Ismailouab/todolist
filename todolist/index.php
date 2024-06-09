<?php
require 'conn.php';
$todos=$conn->query("SELECT * FROM todos ORDER BY id DESC");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    
    
    <title>Document</title>
</head>
<body>
    <div class="main-section">
        <div class="add-section">
            <form action="add.php" method="POST">
              <input type="text" id="input" name="title" placeholder="Press Enter To Add Tasks ">
              <button type="submit" id="button">Add Task</button>
            </form>
        </div>
        <div class="show-todo-section">
            <?php if($todos->rowCount()===0){?> 
                <div class="todo-item">
                  <input type="checkbox">
                  <h2>hghfhgdh</h2>
                  <small>created: 3/3/2024</small>
                </div>
            <?php }?> 


            <?php while($todo=$todos->fetch(PDO::FETCH_ASSOC)){?>
                <div class="todo-item">
                    <button id="<?=$todo['id']; ?>" class="remove-to-do">delete</button>
                    <?php if($todo['checked']){?>
                        <input type="checkbox" class="check-box" data-todo-id="<?=$todo['id']; ?>" checked>
                        <h2 class="checked"><?= $todo['title'];?></h2>   
                    <?php } else {?>
                        <input type="checkbox" class="check-box" data-todo-id="<?=$todo['id']; ?>">
                        <h2><?= $todo['title'];?></h2>
                    <?php }?>
                    <small>created: <?=$todo['date_time']; ?></small>
                </div>
            <?php }?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
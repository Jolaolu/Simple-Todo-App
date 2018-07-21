<?php
error_reporting(E_ALL);
include_once('todo.php');
//
$a_file= file_get_contents('./todo.json');
//decode to an array
$a_content = json_decode($a_file);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do App</title>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <!- -->
    <div class="container">
        <div class="main">
            <h1>To do</h1>
            <div class="content">
                <!--<a href="#">click me</a>-->
                <p>Welcome to my To do App </p>

                <form class="Items" action="todo.php" method="post">
                <input type="text" name="todo_item" class="input" placeholder="Type New Item here.." id="input" autocomplete="off" required><br>
                <input type="submit"  value=" Add Item" name="add_items" class="submit">
                </form>
                <!- new todo items are Added here-->
                <ul class="list">
                    <?php for($i=0; $i<count($a_content); $i++);?>
                    <li> <span class="itemsDone"><?php // echo $a_content[$i]->title; ?></span>  </li>
                   
                </ul>
            </div>
        </div>
       


        
    </div>
   <script src="main.js"></script> 
</body>
</html>
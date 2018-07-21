<?php
//print_r($_POST);



//check if form was submitted
//var_dump($_POST);

if (isset($_POST["add_items"])) {
    //do this 
    $file = file_get_contents("todo.json");
    $json_content = json_decode($file);
    $todoItem = $_POST["todo_item"];
    
    $itemExist = false;
    for ($i = 0; $i < count($json_content->items); $i++) {
        if ($json_content->items[$i]->title == $todoItem) {
            //item exist ?  dont save , return 
            $itemExist = true;
            break;
        }
    }
   
    if ($itemExist == false) {

            //items dont exist and saves
        array_push($json_content->items, [
            "title" => $todoItem,
            "date_created" => date('Y-m-d'),

        ]);

            //updates and saves file 
        file_put_contents("./todo.json", json_encode($json_content));
         header("Location:index.php");

    } else {
        header("Location: index.php?err=item_exist");
        echo "Item ";
        return;
    }
}
?>
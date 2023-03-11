<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";

function viewAddTodoList(){

    // title
    echo "Tambah Todo" . PHP_EOL;
    //  form input
    $input = input("Masukan Todo (x untuk batal)");

    if($input == "x"){
        echo "Batal Menambah Todo" . PHP_EOL;
    }else{
        addTodoList($input);
    }

}
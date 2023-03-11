<?php

// function untuk menampilkan data todolist
function showTodoList(){
    global $todoList; // memanggil variable global scope

    // Title
    echo "Daftar TodoList" . PHP_EOL;

    // logic untuk menampilkan data TodoList menggunakan array mapping
    foreach($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}
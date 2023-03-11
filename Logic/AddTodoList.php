<?php

// function untuk menambah data todolist
function addTodoList(string $todo){
    global $todoList; // memanggil variable global scope

    // cek jumlah data todo
    $number = sizeof($todoList) + 1; // + 1 agar index dimulai dari satu

    // masukan data ke dalam array $todoList
    $todoList[$number] = $todo; // $todoList[1] = "Isi Todo"
}
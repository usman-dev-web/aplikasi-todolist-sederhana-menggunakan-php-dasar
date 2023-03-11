<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Logic/RemoveTodoList.php";

// function untuk menampilkan view ketika menghapus data
function viewRemoveTodoList(){

    // title
    echo "Hapus Todo" . PHP_EOL;

    // form input
    $input = input("masukan No Todo (x untuk batal)");

    if($input == "x"){
        echo "Batal menghapus todo" . PHP_EOL;
    }else{
        $success = removeTodoList($input);

        if($success){
            echo "Berhasil menghapus Todo No-$input" . PHP_EOL;
        }else{
            echo "Gagal, Todo No-$input tidak ada!" . PHP_EOL;
        }
    }
}
<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Logic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";

function viewShowTodoList()
{

    while (true) {

        // memanggil logic menampilkan data todo
        showTodoList();

        // memberi pilihan untuk user
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("masukan pilihan");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak ada" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi..." . PHP_EOL;
}

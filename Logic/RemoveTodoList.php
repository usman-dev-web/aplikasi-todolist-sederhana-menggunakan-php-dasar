<?php

// function untuk menghapus todolist
function removeTodoList(int $number)
{
    global $todoList; // memanggil global variable scope 

    // cek ketika user menginputkan data todolist lebih besar dari data todolist
    if ($number > sizeof($todoList)) {
        return false;
    }

    // logic menghapus data todo menggunakan for
    // contoh data sebelum dihapus
    // 1. Usman
    // 2. Maulana
    // 3. Pinter

    // contoh ketika menghapus data ke 2 tanpa menambah index $i + 1, indexnya akan terhapus
    // 1. Usman
    // 3. Pinter

    // contoh ketika menghapus data ke 2 dengan menambah index $i + 1, indexnya tidak akan terhapus, justru valuenya yang akan bergeser posisinya
    // 1. Usman
    // 2. pinter

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // hapus data todo
    // disini baru data terakhir akan dihapus berserta indexnya, ketika kita menghapus data yang terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
}

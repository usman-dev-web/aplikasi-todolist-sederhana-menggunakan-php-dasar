<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";
require_once __DIR__ . "/../Logic/ShowTodoList.php";
require_once __DIR__ . "/../Logic/RemoveTodoList.php";

addTodoList("Usman");
addTodoList("Maulana");
addTodoList("Adit");

removeTodoList(1);

showTodoList();
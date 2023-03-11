<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";
require_once __DIR__ . "/../Logic/ShowTodoList.php";

addTodoList("Usman");
addTodoList("Maulana");
addTodoList("Ganteng");
addTodoList("Pinter");

showTodoList();
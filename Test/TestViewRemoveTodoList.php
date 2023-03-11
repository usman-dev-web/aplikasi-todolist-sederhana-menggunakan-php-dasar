<?php

require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Logic/ShowTodoList.php";
require_once __DIR__ . "/../Logic/AddTodoList.php";

addTodoList("usman");
addTodoList("maulana");
addTodoList("ganteng");

showTodoList();

viewRemoveTodoList();

showTodoList();
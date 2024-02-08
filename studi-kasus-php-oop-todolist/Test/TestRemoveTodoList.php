<?php

require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./Model/TodoList.php";

addTodoList("Ade");
addTodoList("Nafil");
addTodoList("Firmansah");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();

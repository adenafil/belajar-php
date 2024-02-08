<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "view/ViewAddTodoList.php";
require_once "view/ViewRemoveTodoList.php";
require_once "view/ViewShowTodoList.php";
require_once "Helper/Input.php";

echo "Aplikasi TodoList\n";
echo __DIR__ . PHP_EOL;

viewShowTodoList();
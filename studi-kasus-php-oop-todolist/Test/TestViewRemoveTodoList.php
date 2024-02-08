<?php

require_once "./Model/TodoList.php";
require_once "./view/ViewRemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

addTodoList("ade");
addTodoList("nafil");
addTodoList("firmansah");
addTodoList("programmer");
addTodoList("zaman");
addTodoList("now");

showTodoList();

viewRemoveTodoList();

showTodoList();
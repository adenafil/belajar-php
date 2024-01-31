<?php

require_once "./Helper/Input.php";
require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO\n";

    $todo = input("Todo (x untuk batal): ");

    if ($todo != "x")
    {
        addTodoList($todo);
    }
}
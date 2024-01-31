<?php

/**
 * Menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;

    echo  "TODOLIST\n";

    foreach ($todoList as $number => $value)
    {
        echo "$number. $value\n";
    }
}
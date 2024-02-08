<?php

require_once "./Model/TodoList.php";
require_once "./Helper/Input.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "ViewAddTodoList.php";
require_once "ViewRemoveTodoList.php";

function viewShowTodoList()
{
    while (true)
    {
        showTodoList();
    
        echo "MENU\n";
        echo "1. Tamabah Todo\n";
        echo "2. Hapus Todo\n";
        echo "x. Keluar\n";
    
        $pilihan = input("Pilih");
    
        if ($pilihan == "1")
        {
            viewAddTodoList();
        }
        else if ($pilihan == "2")
        {
            viewRemoveTodoList();
        }
        else if ($pilihan == "x")
        {
            break;
        }
        else
        {
            echo "Pilihan tidak dimengerti\n";
        }
    }

    echo "Sampai Jumpa Lagi\n";
}
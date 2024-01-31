<?php

require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./Helper/Input.php";

function viewShowTodoList()
{
    while (true)
    {
        echo "TodoList";

        showTodoList();
    
        echo "MENU\n";
        echo "1. Tamabah Todo\n";
        echo "2. Hapus Todo\n";
        echo "3. Keluar\n";
    
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
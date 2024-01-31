<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO\n";

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x")
    {
        echo "Batal menghapus todo\n";
    }
    else
    {
        $success = removeTodoList($pilihan);

        if ($success)
        {
            echo "Sukses menghapus todo nomor $pilihan\n";
        }
        else
        {
            echo "Gagal menghapus todo nomor $pilihan";
        }
    
    }

}
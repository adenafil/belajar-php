<?php

namespace View
{
    require_once __DIR__ . "/../Service/TodolistService.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";

    use Helper\InputHelper;
    use Service\TodolistService;
    use Service\TodolistServiceImpl;
    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }


        function showTodolist(): void
        {
            while (true)
            {
                $this->todolistService->showTodolist();

                echo "MENU\n";
                echo "1. Tamabah Todo\n";
                echo "2. Hapus Todo\n";
                echo "x. Keluar\n";

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1")
                {
                    $this->addTodolist();
                }
                else if ($pilihan == "2")
                {
                    $this->removeTodolist();
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

        function addTodolist(): void
        {
            echo "MENAMBAH TODO\n";

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo != "x")
            {
                $this->todolistService->addTodolist($todo);
            }
            else
            {
                echo "Batal Menambah Todo\n";
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO\n";

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");
            if ($pilihan == "x")
            {
                echo "Batal menghapus todo\n";
            }
            else
            {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
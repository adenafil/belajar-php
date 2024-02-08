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

        }

        function removeTodolist(): void
        {

        }
    }
}
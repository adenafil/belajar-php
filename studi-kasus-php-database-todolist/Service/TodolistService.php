<?php

namespace Service
{

    use Entity\Todolist;
    use Override;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number);
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }


        #[Override]
        function showTodolist(): void
        {

            echo  "TODOLIST\n";
            $todolist = $this->todolistRepository->findAll();


            foreach ($todolist as $key => $value)
            {
                echo "{$value->getId()}. {$value->getTodo()}\n";
            }
        }

        #[Override]
        function addTodolist(string $todo): void
        {
            $todoList = new Todolist($todo);

            $this->todolistRepository->save($todoList);
            echo "SUKSES MENAMBAH TODOLIST\n";
        }

        #[Override]
        function removeTodolist(int $number)
        {
            if ($this->todolistRepository->remove($number))
            {
                echo "SUKSES MENGHAPUS TODOLIST\n";
            } else {
                echo "GAGAL MENGHAPUS TODOLIST\n";
            }
        }
    }
}
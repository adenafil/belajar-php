<?php

namespace Service
{
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

            foreach ($todolist as $number => $value)
            {
                echo "$number. $value\n";
            }
        }

        #[Override]
        function addTodolist(string $todo): void
        {
            // TODO: Implement addTodolist() method.
        }

        #[Override]
        function removeTodolist(int $number)
        {
            // TODO: Implement removeTodolist() method.
        }
    }
}
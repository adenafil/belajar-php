<?php

namespace Repository
{

    use Entity\Todolist;
    use Override;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {
        private array $todoList = array();
        #[Override]
        function save(Todolist $todolist): void
        {
            // TODO: Implement save() method.
        }

        #[Override]
        function remove(int $number): bool
        {
            // TODO:  remove() method.
            return false;
        }

        #[Override]
        function findAll(): array
        {
            return $this->todoList;
        }
    }
}

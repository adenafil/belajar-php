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
        public array $todolist = array();

        #[Override]
        function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;

            $this->todolist[$number] = $todolist;
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
            return $this->todolist;
        }
    }
}

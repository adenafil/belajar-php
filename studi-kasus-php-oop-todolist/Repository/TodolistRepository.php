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

            if ($number > sizeof($this->todolist))
            {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++)
            {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        #[Override]
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}

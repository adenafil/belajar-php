<?php

namespace Repository
{

    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }
}

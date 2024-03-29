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
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        #[Override]
        function save(Todolist $todolist): void
        {
//            $number = sizeof($this->todolist) + 1;
//
//            $this->todolist[$number] = $todolist;

            $sql = "insert into todolist(todo) values(?)";
            $preparedStatement = $this->connection->prepare($sql);
            $preparedStatement->execute([$todolist->getTodo()]);
        }

        #[Override]
        function remove(int $number): bool
        {

//            if ($number > sizeof($this->todolist))
//            {
//                return false;
//            }
//
//            for ($i = $number; $i < sizeof($this->todolist); $i++)
//            {
//                $this->todolist[$i] = $this->todolist[$i + 1];
//            }
//
//            unset($this->todolist[sizeof($this->todolist)]);
//
//            return true;

            $sql = "select id from todolist where id = ?";
            $preparedStatement = $this->connection->prepare($sql);
            $preparedStatement->execute([$number]);

            if ($preparedStatement->fetch())
            {
                $sql = "DELETE FROM TODOLIST WHERE ID = ?";
                $preparedStatement = $this->connection->prepare($sql);
                $preparedStatement->execute([$number]);

                return true;
            } else {
                return false;
            }

        }

        #[Override]
        function findAll(): array
        {
//            return $this->todolist;
            $sql = "select id, todo from todolist";
            $prepareStatement = $this->connection->prepare($sql);
            $prepareStatement->execute();

            $result = [];

            foreach ($prepareStatement as $row)
            {
                $todolist = new Todolist();
                $todolist->setId($row["id"]);
                $todolist->setTodo($row["todo"]);
                $result[] = $todolist;
            }

            return $result;

        }
    }
}

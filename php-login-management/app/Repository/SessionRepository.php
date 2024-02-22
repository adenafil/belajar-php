<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Repository;

use ProgrammerZamanNow\Belajar\PHP\MVC\Config\Database;

class SessionRepository
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function save(Session $session): Session
    {
        $statement = $this->connection->prepare("
            insert into sessions(id, user_id) values(?, ?)
        ");
        $statement->execute([$session->id, $session->userId]);
        return $session;
    }

    public function findById(string $id): ?Session
    {
        $statement = $this->connection->prepare("
            select id, user_id from sessions where id = ?
        ");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $session = new Session();
                $session->id = $row['id'];
                $session->userId = $row['user_id'];
                return $session;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }

    }

    public function deleteById(string $id): void
    {
        $statement = $this->connection->prepare("
            delete from sessions where id = ?
        ");
        $statement->execute([$id]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("delete from sessions");
    }
}
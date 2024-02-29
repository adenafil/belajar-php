<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Repository;

use ProgrammerZamanNow\Belajar\PHP\MVC\Domain\User;

class UserRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User
    {
        $statement = $this->connection->prepare("INSERT INTO users(id, name, password) values (?, ?, ?)");
        $statement->execute([
            $user->id, $user->name, $user->password,
        ]);
        return $user;
    }

    public function update(User $user): User
    {
        $statement = $this->connection->prepare(
            "UPDATE users SET name = ?, password = ? where id = ?"
        );

        $statement->execute([
            $user->name, $user->password, $user->id
        ]);

        return $user;
    }

    public function findById(string $id): ?User
    {
        $statement = $this->connection->prepare("select id, name, password from users where id = ?");
        $statement->execute([$id]);

        try {
            // jika ada masuk sini, jika tidak masuk else
            if ($row = $statement->fetch())
            {
                $user = new User();
                $user->id = $row['id'];
                $user->name = $row['name'];
                $user->password = $row['password'];

                return $user;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function deleteAll(): void
    {
        $this->connection->exec("Delete from users");
    }
}
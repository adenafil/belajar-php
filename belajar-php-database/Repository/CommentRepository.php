<?php

namespace Repository
{
    require_once __DIR__ . "/../Model/Comment.php";

    use Model\Comment;

    interface CommentRepository
    {
        function insert(Comment $comment): Comment;

        function findById(int $id): ?Comment;

        function findAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository
    {
        public function __construct(private \PDO $connection)
        {
        }

        #[\Override]
        function insert(Comment $comment): Comment
        {
            $sql = "insert into comments(email, comment) values(?, ?)";
            $preparedStatement = $this->connection->prepare($sql);
            $preparedStatement->execute([$comment->getEmail(), $comment->getComment()]);
            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        #[\Override]
        function findById(int $id): ?Comment
        {
            $sql = "select * from comments where id = ?";
            $preparedStatement = $this->connection->prepare($sql);
            $preparedStatement->execute([$id]);

            if ($row = $preparedStatement->fetch())
            {
                return new Comment(
                    id: $row["id"],email: $row["email"],comment: $row["comment"]
                );
            }
            else
            {
                return null;
            }
        }

        #[\Override]
        function findAll(): array
        {
            $sql = "select * from comments";
            $preparedStatement = $this->connection->query($sql);

            $array = [];

            while ($row = $preparedStatement->fetch())
            {
                $array[] = new Comment(
                    id: $row["id"],comment: $row["comment"],email: $row["email"]
                );
            }

            return $array;

        }

    }

}
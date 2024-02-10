<?php

require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Comment.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$commentRepository = new CommentRepositoryImpl($connection);

//$comment = new Comment(
//  email: "repository@tes.co.id",
//  comment: "mamama huhuhhu"
//);
//
//$newComment = $commentRepository->insert($comment);
//
//var_dump($newComment);

//$comment = $commentRepository->findById(16);
//var_dump($comment);

$comment = $commentRepository->findAll();

var_dump($comment);

$connection = null;


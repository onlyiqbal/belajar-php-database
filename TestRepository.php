<?php

use Repository\CommentRepositoryImpl;
use Model\Comment;

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Model/Model.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// $comment = new Comment(email: "repositroy@test.com", comment: "hi");
// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// $comment = $repository->findById(3);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;

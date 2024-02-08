<?php

require_once  __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todoList[1] = "Belajar PHP";
    $todolistRepository->todoList[2] = "Belajar PHP OOP";
    $todolistRepository->todoList[3] = "Belajar PHP Database";
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();

}

testShowTodolist();
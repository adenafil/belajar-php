<?php

require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Entity/Todolist.php";

use View\TodolistView;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\Todolist;
function testViewShowTodolist(): void
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl());
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();

}

function testViewAddTodolist(): void
{
    $todolistService = new TodolistServiceImpl(new TodolistRepositoryImpl());
    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();

}


testViewAddTodolist();

<?php

require_once "./view/ViewShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("ade");
addTodoList("nafil");
addTodoList("firmansah");
addTodoList("programmer");
addTodoList("zaman");
addTodoList("now");

viewShowTodoList();
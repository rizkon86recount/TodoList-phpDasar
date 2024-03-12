<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";


addTodoList("Mohammad");
addTodoList("Rizkon");
addTodoList("Nurkholis");
addTodoList("Nanda");
addTodoList("Utami");

showTodoList();

viewRemoveTodolist();

showTodoList();

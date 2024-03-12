<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Mohammad");
addTodoList("Rizkon");
addTodoList("Nurkholis");

var_dump($todoList);

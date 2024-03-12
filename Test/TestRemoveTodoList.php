<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";


addTodoList("Rizkon");
addTodoList("Nanda Utami");
addTodoList("Mouse");
addTodoList("Keyboard");

ShowTodoList();

RemoveTodoList(3);

ShowTodoList();

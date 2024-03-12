<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Mohammad");
addTodoList("Rizkon");
addTodoList("Nurkholis");

viewAddTodoList();

ShowTodoList();

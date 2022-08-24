<?php
require_once "../view/viewAddTodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList('programmer');
addTodoList('zaman');

viewAddTodoList();

showTodolist();
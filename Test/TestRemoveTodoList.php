<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../BusinessLogic/addTodoList.php";
require_once "../BusinessLogic/removeTodoList.php";

addTodoList("Muhammad");
addTodoList("Syaifudin");
addTodoList("Jerry");
addTodoList("Axel");

showTodolist();
removeTodoList(1);
showTodolist();

$success = removeTodoList(5);
var_dump($success);

showTodolist();

removeTodoList(2);
showTodolist();

 ?>
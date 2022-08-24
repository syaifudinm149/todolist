<?php 
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList('muhammad');
addTodoList('syaifudin');
addTodoList('jerry');
addTodoList('Axel');

var_dump($todoList);

 ?>
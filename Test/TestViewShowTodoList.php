<?php
require_once "../view/viewShowTodoList.php";
require_once "../BusinessLogic/addTodoList.php";

addTodoList('Programmer');
addTodoList('Zaman');
addTodoList('Now');


viewShowTodoList()


?>
<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/showTodoList.php";
require_once "../view/viewAddTodoList.php";
require_once "../view/viewRemoveTodoList.php";
require_once "../Helper/Input.php";

function viewShowTodoList()
{
	while(true){
			showTodolist();

			echo "Menu". PHP_EOL;
			echo "1. Tambah Todo". PHP_EOL;
			echo "2. Hapus Todo". PHP_EOL;
			echo "0. Keluar". PHP_EOL;

			$pilihan = input("pilih");

			if($pilihan == 1){
				viewAddTodoList();
			}else if($pilihan == 2){
				viewRemoveTodoList();
			}else if($pilihan == 0){
				break;
			} else {
				echo "pilihan tidak ada". PHP_EOL;
			}	
		}
	echo "sampai jumpa lagi";
}

 ?>
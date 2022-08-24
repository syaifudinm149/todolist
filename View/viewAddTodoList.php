 <?php 
 require_once "../Model/TodoList.php";
 require_once "../Helper/Input.php";
 require_once "../BusinessLogic/addTodoList.php";

function viewAddTodoList()
{
	$todo = input('Todo (0 untuk batal)');

	if($todo == "0"){
		echo "gagal tambah todo";
	}else{
		addTodoList($todo);
	}
}

 ?>			
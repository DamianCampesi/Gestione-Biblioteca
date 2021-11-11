<?php 
	class View{
		function __construct(){
			//costrutore vouto
		}
		function render($name,$renderAll = false){
			if($renderAll){
				if(empty($_SESSION['is_librarian'])){
					require_once 'application/view/header.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/footer.php';
				}elseif($_SESSION['is_librarian'] == 0){
					require_once 'application/view/homeHeader.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/footer.php';
				}elseif($_SESSION['is_librarian'] == 1){
					require_once 'application/view/homeHeader.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/footer.php';
				}
			}else{
				require_once 'application/view/' . $name . '.php';
			}
		}
	}
 ?>
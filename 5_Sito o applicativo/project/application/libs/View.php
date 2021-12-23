<?php 
	class View{
		function __construct(){
			//costrutore vuoto
		}
		/**
		 * Funzione che in base ai permessi, renderizza le pagine necessarie
		 *
		 * $_SESSION['is_librarian'] vuota --> non loggato
		 * $_SESSION['is_librarian'] == 0 --> utente normale
		 * $_SESSION['is_librarian'] == 1 --> biblitecario
		 */
		function render($name,$renderAll = false){
			if($renderAll){
				if(!isset($_SESSION['is_librarian'])){
					require_once 'application/view/loginHeader.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/loginFooter.php';
				}elseif($_SESSION['is_librarian'] == 0){
					require_once 'application/view/homeHeader.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/footer.php';
				}elseif($_SESSION['is_librarian'] == 1){
					require_once 'application/view/librarianHeader.php';
					require_once 'application/view/' . $name . '.php';
					require_once 'application/view/footer.php';
				}
			}else{
				require_once 'application/view/' . $name . '.php';
			}
		}
	}
 ?>
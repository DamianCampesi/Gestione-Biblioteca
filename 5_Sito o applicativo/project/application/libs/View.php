<?php 
	class View{
		function __construct(){

		}
		function render($name){
			require_once 'application/view/' . $name . '.php';
		}
	}
 ?>
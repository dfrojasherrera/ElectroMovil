<?php 
	class conexion{
		function formularioContactos(){
			$host = 'localhost';
			$user = 'root';
			$pass = 'fedora';
			$database = 'contacto';

			$conect = mysql_connect($host, $user, $pass) or die("conection failed");
			mysql_select_db($database, $conect) or die("database not found");	

			}
		}
	}
 ?>
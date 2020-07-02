<?php



		$mysqli = new MySQLi("localhost", "miboutiq_chidin","putoluigi", "miboutiq_sugerencias");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else

?>
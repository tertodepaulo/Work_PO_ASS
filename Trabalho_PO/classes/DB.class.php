<?php
	class DB{
		public function conectar(){
			$host="localhost";
			$user="gustavo";
			$pass="123456";
			$dbname="crud";
			
			$conexao=mysqli_connect($host,$user,$pass, $dbname) or print_r("Droga");
			#$selectdb=mysqli_select_db($conexao, $dbname);
			
			if(mysqli_connect_errno($conexao))
			{
				echo "Problemas ao conectar ao banco";
				die();
			}

			return $conexao;
			
		}
		
	}


?>
<?php
	class Cadastro{
		public function cadastrar($nome, $end, $email, $senha, $conectar){
			//Tratamento das variáveis
			$nome=ucwords(strtolower($nome));
			$end=ucwords(strtolower($end));
			$senha=$senha;
			//Inserção no banco de dados
			/*if ($conectar) {
				echo "sim";
			}
			else {
				echo "não";
			}
			exit;*/
			/*var_dump($nome);
			var_dump($end);
			var_dump($email);
			var_dump($senha);
			var_dump($conectar);
			exit;*/
			$sql = "SELECT * FROM usuarios WHERE email='$email'";
			$validaremail=mysqli_query($conectar, $sql);
			$contar=mysqli_num_rows($validaremail);
			if($contar == 0)
				{
					$sql2 = "INSERT INTO usuarios(nome, end, email, senha, nivel, status)VALUES('$nome','$end','$email','$senha', 1, 0)";
					$insert=mysqli_query($conectar, $sql2);
				}
				else
				{
					$flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
				}
				if(isset($insert))
				{
						$flash="Cadastro realizado com sucesso, aguarde a nossa aprovação!";
				}
				else
				{
						if(empty($flash))
						{
							$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
						}
				}
			//Retorno para o usuário
			echo $flash;
		}
	
	}

?>
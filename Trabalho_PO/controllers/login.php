<?php
if($startaction == 1 && $acao == "logar"){
		//Dados
		$email=addslashes($_POST["email"]);
		$senha=addslashes($_POST["senha"]);
		
		if(empty($email) || empty($senha)){
			$msg="Preencha todos os campos!";
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$msg="Digite seu e-mail corretamente!";
			}else{
				//Executa a busca pelo usuário
				$login=new Login;
				echo "<div class=\"flash\">";
				$login=$login->logar($email, $senha, $conectar); 
				echo"</div>";
				
			}
		}
}
?>
	<?php

	class Login{
		public function logar($email, $senha, $conectar){
			$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
			$buscar=mysqli_query($conectar,$sql);
			if(mysqli_num_rows($buscar) == 1){
				$dados=mysqli_fetch_array($buscar);
				if($dados["status"] == 1){
					$_SESSION["email"]=$dados["email"];
					$_SESSION["senha"]=$dados["senha"];
					$_SESSION["nivel"]=$dados["nivel"];
					setcookie("logado",1);
					$log=1;
				}else{
					$flash="Aguarde a nossa aprovação!";
				}
			}
			
				if(isset($log)){
					$flash="Você foi logado com sucesso";
				}else{
					if(empty($flash)){
					$flash="Ops! Digite seu e-mail e sua senha corretamente!";
					}
				}
				echo $flash;
		}
	
	}

?>
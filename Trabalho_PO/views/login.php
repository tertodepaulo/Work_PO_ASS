<?php
$page="Trabalho PO - Login";
include("header.php");
?>
<div id="cadastrar"><a href="cadastro.php" title="Cadastre-se e faça parte da nossa equipe!">Cadastre-se &raquo;</a></div>
	<div id="login" class="form bradius">
    	<div class="message" style="<?php echo $display;?>"></div>
        <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/imagens/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="200" height="58" /></a></div>
        <div class="acomodar">
        	<form action="index.php?acao=logar" method="post">
            <label for="email">E-mail: </label><input id="email" type="text" class="txt bradius" name="email" value="" />
            <label for="senha">Senha: </label><input  id="senha" type="password" class="txt bradius" name="senha" value="" />
            <input type="submit" class="sb bradius" value="Entrar" />
            </form>
        <!--acomodar-->
        </div>
       <!--login-->
    </div>
</body>
</html>
<?php
$page="Trabalho PO - Cadastro";
include("header.php");
?>
	<div id="cadastrar"><a href="index.php" title="Faça login!">Login &raquo;</a></div>
	<div id="login" class="form bradius" style="top:150px;">
    	<div class="message bradius " style="<?php echo $display;?>"><?php echo $msg;?></div>
        <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/imagens/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="200" height="58" /></a></div>
        <div class="acomodar">
        	<form action="cadastro.php?acao=cadastrar" method="post">
            <label for="nome">Nome: </label><input id="nome" type="text" class="txt bradius" name="nome"  />
             <label for="end">Endereço: </label><input id="end" type="text" class="txt bradius" name="end"  />
            <label for="email">E-mail: </label><input id="email" type="text" class="txt bradius" name="email" />
            <label for="senha">Senha: </label><input  id="senha" type="password" class="txt bradius" name="senha"  />
            <input type="submit" class="sb bradius" value="Cadastrar" />
            </form>
        <!--acomodar-->
        </div>
       <!--login-->
    </div>
</body>
</html>
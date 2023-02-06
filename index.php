<?php 

require './lib/autoload.php';


$smarty = new Template();
Rotas::get_Pagina();

//valores para o template

$smarty->assign('email', 'teste@testemail.com');

$smarty->display('index.tpl');

 ?>
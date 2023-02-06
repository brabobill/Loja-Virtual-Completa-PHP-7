<?php 

require './lib/autoload.php';


$smarty = new Smarty();
$smarty->setTemplateDir('view/');
$smarty->setCompileDir('view/compile/');
$smarty->setCacheDir('view/cache/');


//valores para o template

$smarty->assign('email', 'teste@testemail.com');

$smarty->display('index.tpl');

 ?>
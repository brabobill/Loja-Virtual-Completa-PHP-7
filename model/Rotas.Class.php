<?php 

Class Rotas{

	public static $pag;

	static function get_Pagina(){
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);
			var_dump(self::$pag);

			$pagina = 'controller/' .$_GET['pag'] . '.php';
			if(file_exists($pagina)){
				include $pagina;
			}else{
				include 'error.php';
			}
		}
	}

}
 

 ?>

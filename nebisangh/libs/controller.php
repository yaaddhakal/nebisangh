<?php
//base controller
class controller{
	
	//loads the model with modelname
	function loadmodel($modelname){
		$path='model/'.$modelname.'.model'.'.php';
		require_once $path;
		return new $modelname;
	}

	//loads view from view folder
	function loadview($viewname,$header=true,$footer=true){
		$path='view/'.$viewname.'.php';
		if ($header) {
			require_once 'view/layout/header.php';
		}
		require_once $path;
		if ($footer) {
			require_once 'view/layout/footer.php';
		}
	}
}


?>
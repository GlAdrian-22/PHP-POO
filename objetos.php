<?php 
	class miClase{
		//Atributos
		public $resultado=0;
		
		//Metodo
		public function miMetodo($v1,$v2){
			$this->resultado=$v1 + $v2;
			return $this->resultado;
		}
	}
	//Fin de clase

	//Instanciar o declarar un objeto
	$miObjeto= new miClase();
	echo $miObjeto->miMetodo(5,10);
 ?>
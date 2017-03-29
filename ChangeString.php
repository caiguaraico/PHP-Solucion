<?php 
/*****************************************************************
* Titulo: ChangeString
* Autor:  Héctor Caiguaraico
* Fecha:  29/03/2017
*****************************************************************/


class ChangeString 
{
	private $abecedario_1 = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	private $abecedario_2 = [];

	function __construct()
	{

		
		// crear nuevo arreglo

		$num_abecedario = count($this->abecedario_1);
		$this->abecedario_2[0] = $this->abecedario_1[$num_abecedario-1];

		foreach ($this->abecedario_1 as $k => $val_2) {			
			if( ($k+1)!=$num_abecedario ){	$this->abecedario_2[$k+1] = $val_2; }
		}

		// agregar mayúsculas al arreglo

		$mayusculas = [];
		foreach ($this->abecedario_1 as $val_1) { $mayusculas[] = strtoupper($val_1); }
		$this->abecedario_1 = array_merge($this->abecedario_1,$mayusculas);

		$mayusculas = [];
		foreach ($this->abecedario_2 as $val_1) { $mayusculas[] = strtoupper($val_1); }
		$this->abecedario_2 = array_merge($this->abecedario_2,$mayusculas);
		

		// invertir array

		$this->abecedario_1 = array_reverse($this->abecedario_1);
		$this->abecedario_2 = array_reverse($this->abecedario_2);
	
	}


	public function build($parametro='')
	{
		// reemplazar caracteres en el texto

		$parametro = str_replace($this->abecedario_2,$this->abecedario_1,$parametro);

		return $parametro;
	}
}


$clase1 = new ChangeString();

var_dump($clase1->build('123 abcd*3'));
var_dump($clase1->build('**Casa 52'));
var_dump($clase1->build('**Casa 52Z'));

exit();



?>
<?php 
/*****************************************************************
* Titulo: ClearPar
* Autor:  Héctor Caiguaraico
* Fecha:  29/03/2017
*****************************************************************/


class ClearPar
{

	private function clear($parametro)
	{
		$cantidad = substr_count($parametro,'()');
		$nueva_cadena = '';

		for ($i=0; $i < $cantidad ; $i++) { 
			$nueva_cadena = $nueva_cadena.'()';
		}

		return $nueva_cadena;
	}



	public function build($parametro=[])
	{

		return $this->clear($parametro);

	}
}



$clase3 = new ClearPar();

var_dump($clase3->build('()())()'));
var_dump($clase3->build('()(()'));
var_dump($clase3->build(')('));
var_dump($clase3->build('((()'));

exit();


?>
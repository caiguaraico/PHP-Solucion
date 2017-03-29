<?php 
/*****************************************************************
* Titulo: CompleteRange
* Autor:  Héctor Caiguaraico
* Fecha:  29/03/2017
*****************************************************************/


class CompleteRange
{
	

	private function completar($parametro)
	{
		$num_array = count($parametro);
		$array_completo = [];

		for ($i=$parametro[0]; $i <= $parametro[$num_array-1]; $i++) { $array_completo[] = $i; }

		return $array_completo;
	}


	public function build($parametro=[])
	{

		return $this->completar($parametro);
					
	}
}


$clase2 = new CompleteRange();

var_dump($clase2->build([1,2,4,5]));
var_dump($clase2->build([2,4,9]));
var_dump($clase2->build([55,58,60]));

exit();


?>
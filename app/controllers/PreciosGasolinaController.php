<?php

class PreciosGasolinaController extends ControllerBase
{

	function initialize (){
		$this->model_cp = new CatCpostal();
	}

	/**
	 * Regresar los precios de gasolina ordenados por el precio de algun
	 *
	 * @param string Estado
	 * @param string Municipio
	 * @param string ordenamiento
	 * @return JSON ordenado de precios de gasolina
	 */
  public function indexAction($edo='', $mun='', $order='')
	{
		$edo = $this->dispatcher->getParam("estado", ["string", "striptags", "trim"]);
		$mun = $this->dispatcher->getParam("municipio", ["string", "striptags", "trim"]);
		$order = $this->dispatcher->getParam("orden", ["string", "striptags", "trim"]);

		// var_dump($edo); die();

		$esValido = $this->validarRequest($edo, $mun, $order);
		if(!$esValido){
				$response = [
					"success" => FALSE,
					"results" => array()
				];
				$this->enviaDatosJson($response, 200, "OK");
		}



		$gasolineras = array();

		$parameters = array(
			"edo" => $edo,
			"mun" => $mun
		);

		$cods_result = $this->model_cp->get_codigos($parameters);

		$precios_gasolina = json_decode( file_get_contents('https://api.datos.gob.mx/v1/precio.gasolina.publico?pageSize=100000'), true );

		// false, si hubo error al recuperar el JSON de API
		if(!$precios_gasolina)
		{
				$result = false;
		}else
		{
				$resultados = $precios_gasolina['results'];

				foreach ($cods_result as $cod)
				{
					// var_dump($cod->cps);
					$cp = $cod->cps;
					foreach ($resultados as $resultado)
					{
						if($resultado['codigopostal'] == $cp)
						{
								$resultado['estado'] = $edo;
								$resultado['municipio'] = $mun;
								array_push($gasolineras, $resultado);
						}
					}
				}

				$gasolineras = $this->ordenar($order, $gasolineras);
				$result = (count($gasolineras)>0)?true:false;
		}

		$response = [
			"success" => $result,
			"results" => $gasolineras
		];

		$this->enviaDatosJson($response, 200, "OK");

  }// indexAction

	/**
	 * Ordenar array de resultados
	 *
	 * @param string de tipo de ordenamiento recibido del cliente
	 * @param Array de datos para ordenar
	 * @return Array de datos ordenados
	 */
	private function ordenar($tipo, $datos)
	{
		switch ($tipo)
		{
			case 'asc_regular':
				usort($datos, function ($item1, $item2)
				{
						return $item1['regular'] - $item2['regular'];
				});
			break;
			case 'asc_premium':
				usort($datos, function ($item1, $item2)
				{
						return $item1['premium'] - $item2['premium'];
				});
			break;
			case 'asc_diesel':
				usort($datos, function ($item1, $item2)
				{
						return $item1['dieasel'] - $item2['dieasel'];
				});
			break;
			default:
				$datos = $datos;
			break;
		}
		return $datos;
	}// ordenar()

	/**
	 * Validar que el consumo sea válido
	 *
	 * @param string estado
	 * @param string municipio
	 * @param string ordenamiento
	 * @return boolean
	 */
	private function validarRequest($edo, $mun, $orden)
	{
		$esValido = TRUE;
		if( (trim($edo) == ''   || $edo == null) ||
		    (trim($mun) == ''   || $mun == null) ||
				(trim($orden) == '' || $orden == null) ){
			$esValido = FALSE;
		}
		return $esValido;
	}// ordenar()

}

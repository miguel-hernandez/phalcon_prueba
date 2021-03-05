<?php
use Phalcon\DI;

class CatCpostal extends \Phalcon\Mvc\Model
{

	/**
	* Inicializar referencia de bd.tabla y obtener conexión para uso en el modelo
	*
	*/
	public function initialize()
	{
		$this->setSource("cat_cpostal");
		$this->conexion = DI::getDefault()->get('db');
	}// initialize

	/**
	 * Recuperar los estados
	 *
	 * @return Array
	 */
	public function get_estados()
	{
		$str_query = "SELECT distinct cp.d_estado AS estado
			FROM cat_cpostal cp
			ORDER BY cp.d_estado ASC";
			return $this->conexion->fetchAll($str_query,
			Phalcon\Db::FETCH_OBJ, array()
		);
	}// get_estados()

	/**
	 * Recuperar los municipios por estado
	 *
	 * @param Array de datos para filtrar: estado
	 * @return Array de datos ordenados por municipio
	*/
	public function get_municipiosxentidad($array_datos)
	{
		$str_query = "SELECT distinct cp.d_municipio AS municipio
		FROM cat_cpostal cp
		WHERE cp.d_estado = :edo
		ORDER BY cp.d_municipio ASC";
		return $this->conexion->fetchAll($str_query,
		Phalcon\Db::FETCH_OBJ, array(
			'edo' => $array_datos['edo']
		)
	);
	}// get_municipiosxentidad()

	/**
	 * Recuperar los codigos postales por estado y municipio
	 *
	 * @param Array de datos para filtrar: estado, municipio
	 * @return Array de códigos postales
	*/
	public function get_codigos($array_datos)
	{
		$str_query = "SELECT distinct cp.d_codigo AS cps
		FROM cat_cpostal cp
		WHERE cp.d_estado = :edo
		AND cp.d_municipio = :mun";
		return $this->conexion->fetchAll($str_query,
		Phalcon\Db::FETCH_OBJ,
		array(
			'edo' => $array_datos['edo'],
			'mun' => $array_datos['mun']
		)
	);
	}// get_codigos()



}

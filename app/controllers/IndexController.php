<?php

class IndexController extends ControllerBase
{

	/**
	* Inicializar instancia(s) de modelo a usar
	*
	*/
	function initialize (){
		parent::initialize();
		$this->model_cp = new CatCpostal();
	}

	public function indexAction()
	{
		$this->tag->setTitle('Index');
		$this->view->setVar('arrayEstados', $this->model_cp->get_estados());
	}// indexAction

	/**
	* Recuperar los municipios por estado
	*
	* @param string estado para filtrar
	* @return JSON de municipios
	*/
	public function getMunicipiosxEntidadAction($estado)
	{
		$edo = $this->dispatcher->getParam("estado", ["string", "striptags", "trim"]);
		// var_dump($municipio); die();
		$parameters = array(
			"edo" => $edo
		);

		$result = $this->model_cp->get_municipiosxentidad($parameters);

		$response = [
			"array_municipios" => $result
		];

		$this->enviaDatosJson($response, 200, "OK");

	}// getMunicipiosxEntidadAction

}

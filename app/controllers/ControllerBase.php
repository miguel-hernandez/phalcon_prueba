<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

	/**
	 * Inicializar constantes para uso global y bajar vriables generales a vistas
	 *
	 */
	public function initialize()
	{
		   define('NOMBRE_PROYECTO', 'PHALCON');
			 define('AUTOR', 'Miguel Hernández Ramos');

       $this->view->setVar("url_app", $this->url->get(''));
			 $this->view->setVar("autor", AUTOR);
  }// initialize()

	/**
	 * Enviar los datos al cliente
	 *
	 * @param Array de datos para enviar
	 * @param int codigo de envío
	 * @param string de estatus
	 * @return JSON del array recibido
	 */
	public function enviaDatosJson($content, $statusCode=200, $statusMessage="ok")
	{
			$content = json_encode($content);
			$response = new \Phalcon\Http\Response();
			$response->setContent($content);
			$response->setContentType('application/json', 'UTF-8');
			$response->setStatusCode($statusCode, $statusMessage);
			$response->send();
	}// enviaDatosJson()

}

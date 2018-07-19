<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CONTOH CONTROLLER
| -------------------------------------------------------------------------
|
| Contoh Controller dari dokumentasi REST_Controller (Chris Kacerguis)
|
*/

// Wajib digunakan
require APPPATH . '/libraries/REST_Controller.php';

class Books extends REST_Controller {

	public function index_get()
	{
		$this->response([
			'success' => true
		]);
	}

	public function index_post()
	{
		$this->response([
			'success' => true,
			'message' => 'Data masuk'
		]);
	}
}

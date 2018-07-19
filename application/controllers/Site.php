<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| PENTING
| -------------------------------------------------------------------------
|
| Digunakan untuk menampilkan view dari hasil Production Vue.js
|
*/

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
}

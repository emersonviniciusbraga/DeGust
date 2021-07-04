<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

	

	public function index() {

		$this->load->model('');
		$dados['titulo'] = 'Agenda - Painel';
		$this->load->view('inicial', $dados);
	}


}

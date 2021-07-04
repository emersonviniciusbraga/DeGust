<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PainelPesquisador extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permission();
	}

	public function index() {

		
		$this->load->model('pesquisas_model');
		$dados['pesquisas'] = $this->pesquisas_model->index();
		$dados['titulo'] = 'Pesquisas - Degust';
		$this->load->view('pesquisas', $dados);
	}


}

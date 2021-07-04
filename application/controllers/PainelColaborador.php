<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PainelColaborador extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permission();
	}

	public function index() {

		$this->load->model('pesquisas_model');
		$this->load->model('FormModel');
		$dados['forms'] = $this->FormModel->listar('formulario');
		$dados['pesquisas'] = $this->pesquisas_model->index();		
		$dados['titulo'] = 'Painel Colaborador - DeGust';
		$this->load->view('painel-colaborador', $dados);
	}


}

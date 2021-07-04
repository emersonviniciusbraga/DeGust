<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternativas extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permission();
	}
	
	public function index() {

		$this->load->model('alternativas_model');
		$dados['alternativas'] = $this->alternativas_model->index();
		$dados['titulo'] = 'Alternativas - Degust';
		$this->load->view('alternativas', $dados);

	}
	
	public function cadastrar($idpergunta)
	{
		$this->load->model('alternativas_model');
		$dados['titulo'] = 'Cadastro de Alternativas - Degust';
		$dados['nome'] = 'Cadastro de Alternativas';
		$dados['pergunta'] = $this->alternativas_model->cadastrar($idpergunta);
		$this->load->view('form-alternativas', $dados);
	}
	
	public function store() {
		$alternativas = array(
					'texto' => $_POST['texto'],
					'valor' => $_POST['valor'],
                    'tipo' => $_POST['tipo'],
					'pergunta_idpergunta' => $_POST['pergunta_idpergunta']
		);

		$this->load->model('alternativas_model');
		

		$this->alternativas_model->store($alternativas);
		redirect('pesquisas');
		
	}

	public function pergunta($idpergunta)
	{
		$this->load->model('alternativas_model');
		$dados['titulo'] = 'Cadastro de Alternativas - Degust';
		$dados['nome'] = 'Cadastro de Alternativas';
		$dados['alternativas'] = $this->alternativas_model->index();
		$dados['pergunta'] = $this->alternativas_model->pergunta($idpergunta);
		$this->load->view('alternativas', $dados);
	}

	
}
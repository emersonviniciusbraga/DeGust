<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguntas extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permission();
	}
	
	public function index() {

		$this->load->model('perguntas_model');
		$dados['perguntas'] = $this->perguntas_model->index();
		$dados['titulo'] = 'Perguntas - Degust';
		$this->load->view('perguntas', $dados);

	}
	
	public function cadastrar($idformulario)
	{
		$this->load->model('perguntas_model');
		$dados['titulo'] = 'Cadastro de Perguntas - Degust';
		$dados['nome'] = 'Cadastro de Perguntas';
		$dados['formulario'] = $this->perguntas_model->cadastrar($idformulario);
		$this->load->view('form-perguntas', $dados);
	}
	
	public function store() {
		$this->load->model('perguntas_model');

		$perguntas = array(
					'nome' => $_POST['nome'],
					'tipo' => $_POST['tipo'],
					'formulario_idformulario' => $_POST['formulario_idformulario']
		);

		$this->perguntas_model->store($perguntas);
		redirect('pesquisas');
		

	
	}


	public function form($idformulario)
	{
		$this->load->model('perguntas_model');
		$dados['titulo'] = 'Cadastro de Perguntas - Degust';
		$dados['nome'] = 'Cadastro de Perguntas';
		$dados['perguntas'] = $this->perguntas_model->index();
		$dados['formulario'] = $this->perguntas_model->form($idformulario);
		$this->load->view('perguntas', $dados);
	}
	

	public function alternativa($idpergunta)
	{
		$this->load->model('alternativas_model');
		$dados['titulo'] = 'Cadastro de Alternativas - Degust';
		$dados['nome'] = 'Cadastro de Alternativas';
		$dados['alternativas'] = $this->alternativas_model->index();
		$dados['pergunta'] = $this->alternativas_model->pergunta($idpergunta);
		$this->load->view('alternativas', $dados);
	}

}
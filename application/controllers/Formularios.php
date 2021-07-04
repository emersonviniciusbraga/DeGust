<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formularios extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('FormModel', 'model');
        permission();
	}

	public function index()
	{
		$forms = $this->model->listar('formulario');
		$this->load->view('listar', array('forms' => $forms));
	}

	public function form($id)
	{
		$form = $this->model->listar('formulario', $id);
		$perguntas = $this->model->get_perguntas($id);
		
		$alternativas = array();
		foreach ($perguntas as $p) {
			$alternativas[$p['idpergunta']] = $this->model
				->get_alternativas($p['idpergunta']);
		}
		// print_r($form);

		$this->load->view('form', 
			array('form' => $form,
					'perguntas' => $perguntas,
					'alternativas' => $alternativas));
	}

	public function processa($form_id){
		var_dump($_POST);
		$form_id;
		$respostas = array();

		
		
		foreach ($_POST as $key => $value) {
			$id = substr($key, 9);

			$resp = array( 'resposta' => $value,
							'pergunta_idpergunta' => $id);
            $resp['usuario_colaborador_idusuario_colaborador'] = $_SESSION['logged_user']['idusuario_colaborador'];

			array_push($respostas, $resp);
		}
		$ret = $this->model->save_respostas($respostas);
		if($ret)
			redirect('painelcolaborador');
		else
			echo 'Erro ao processar respostas!';
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupColaborador extends CI_Controller {


	
	public function index() {

		$dados['titulo'] = 'Cdastro Colaborador - DeGust';
		$this->load->view('signup-colaborador', $dados);

	}
	public function storeColaborador(){

		$this->load->model('usuarios_model');
		$usuarioC = array(
			'nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'senha' => md5($_POST['senha'])
		);
		

		$this->usuarios_model->storeColaborador($usuarioC);
		redirect('LoginColaborador');

	}
}

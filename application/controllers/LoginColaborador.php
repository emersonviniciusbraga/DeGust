<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginColaborador extends CI_Controller {


	
	public function index() {

		$this->load->model('login_model');
		$dados['titulo'] = 'Login Colaborador - DeGust';
		$this->load->view('login-colaborador', $dados);

	}
	public function storeColaborador(){

		$this->load->model('login_model');
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$userC = $this->login_model->storeColaborador($email, $senha);

		if($userC){
			$this->session->set_userdata('logged_user', $userC);
			redirect('PainelColaborador');
		}else{
			redirect('SignupColaborador');
		}
	}

	public function logout(){

		$this->session->unset_userdata('logged_user');
		redirect('Inicial');
    }
}
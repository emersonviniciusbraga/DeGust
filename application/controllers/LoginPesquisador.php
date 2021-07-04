<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPesquisador extends CI_Controller {


	
	public function index() {

		$this->load->model('login_model');
		$dados['titulo'] = 'Login Pesquisador - DeGust';
		$this->load->view('login-pesquisador', $dados);

	}


	public function loginSUAP()
	{	
		$this->load->model('suapapi_model');
		$this->load->model('login_model');
		$matricula = $_POST['matricula'];
		$senha = $_POST['senha'];
		$token = $this->suapapi_model->autentica($matricula, $senha);
		$user_suap = null;	
		$alert['titulo'] = 'teste';			
		
		if(isset($token)){
			$user_suap =$this->suapapi_model->getMeusDados($token);
			$user_db = $this->login_model->getUsuario($user_suap->matricula);
			$cad = null;
			// $tipo = 0;
			if(!isset($user_db)){
				
				// if ($user_suap->matricula == "20171084010005" or $user_suap->matricula == "20171084010003" or  $user_suap->matricula == "20171084010015"){
				//  	$tipo = 2;
				

				// }else if($user_suap->tipo_vinculo == "Aluno"){
				// 	$tipo = 1;


				// }
				$usuario = array(
					'matricula' => $user_suap->matricula,
					'email' => $user_suap->email,
					'nome' => $user_suap->nome_usual
					// 'setor' => $user_suap->tipo_vinculo,
					// 'tipo' => $tipo
				);
				$cad = $this->login_model->cadastrarUsuario($usuario);
			}
			$usuario = array(
					'matricula' => $user_suap->matricula,
					'email' => $user_suap->email,
					'nome' => $user_suap->nome_usual
					// 'setor' => $user_suap->tipo_vinculo,
					// 'tipo' => $tipo
				);
		
			if(isset($cad) || isset($user_db)){
				$this->session->set_userdata('logged_user', $usuario);
				redirect('PainelPesquisador');
			}else{

				// $alert['msg'] = '<p><strong>Impossível efetuar login. Preenha todos os campos e verifique sua matrícula e senha!</strong></p>';
				// // $this->load->view('paginas/login_suap', $alert);
				//  redirect(base_url('Login'))->with('message',$message);
				$dados['titulo'] = 'Login-Sicovip';
				$dados['msg'] = '<p><strong>Impossível efetuar login. Preenha todos os campos e verifique sua matrícula e senha!</strong></p>';
				
				$this->load->view('partes/cabecalho', $dados);
				$this->load->view('partes/cabecalho2');
				$this->load->view('partes/links_login');
				$this->load->view('paginas/login_suap', $dados);
				$this->load->view('partes/rodape');

			}
		}
		else{
			
				

		}
	}

	public function logout(){

		$this->session->unset_userdata('logged_user');
		redirect('Inicial');
		}

}
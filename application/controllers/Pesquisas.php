<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisas extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('phpqrcode/qrlib');
		permission();
	}
	
	public function index() {

		$this->load->model('pesquisas_model');
		$dados['pesquisas'] = $this->pesquisas_model->index();
		$dados['titulo'] = 'Pesquisas - Degust';
		$this->load->view('pesquisas', $dados);

	}
	
	public function cadastrar()
	{
		$dados['titulo'] = 'Cadastro de Pesquisas - Degust';
		$dados['nome'] = 'Cadastro de Pesquisa';
		$this->load->view('form-pesquisas', $dados);
	}
	
	public function store() {
		$pesquisas = array(
					'nome' => $_POST['nome'],
					'titulo' => $_POST['titulo'],
					'descricao' => $_POST['descricao']
		);

		$pesquisas['acao'] = '?/formularios/processa/';
		$pesquisas['metodo'] = 'POST';
		$pesquisas['usuario_pesquisador_matricula'] =  $_SESSION['logged_user']['matricula'];
		$this->load->model('pesquisas_model');
		

		$SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/degust/assets/qrcodes/';
		$text = $pesquisas['qrcode'];
		$text1= substr($text, 0,9);	
		$folder = $SERVERFILEPATH;
		$file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
		$file_name = $folder.$file_name1;

		
		$pesquisas['qrcode'] = $file_name1;
		$form_id  = $this->pesquisas_model->store($pesquisas);
		$this->pesquisas_model->update($pesquisas['idformulario'],$pesquisas);

		$link = base_url('?/formularios/form/'.$form_id);
			
		QRcode::png($link,$file_name);
		redirect(base_url('Pesquisas'));
	
	}

	public function edit($idpesquisas) {

		$this->load->model('pesquisas_model');
		$dados['pesquisas'] = $this->pesquisas_model->show($idpesquisas);
		$dados['titulo'] = 'Editar Pesquisa - Degust';
		$dados['nome'] = 'Editar Pesquisa';
		$this->load->view('form-pesquisas', $dados);

	}

	public function update($idpesquisas){

		$this->load->model('pesquisas_model');
		$pesquisas = $_POST;
		$this->pesquisas_model->update($idpesquisas, $pesquisas);
		redirect('pesquisas');
	}
	
	public function delete($idpesquisas)
	{
		$this->load->model('pesquisas_model');
		$pesquisas = $this->pesquisas_model->show($idpesquisas);
		$qrcode = $pesquisas['qrcode'];
		$diretorio = 'assets/qrcodes/';
		unlink($diretorio.$qrcode);
		$this->pesquisas_model->destroy($idpesquisas);
		redirect(base_url('pesquisas'));
	}

	public function mostrarqrcode($qrcode){
		$this->load->model('pesquisas_model');
		$this->pesquisas_model->buscarpesquisa($qrcode);
		$nomeqrcode = ($qrcode);
		$dados['nomeqrcode'] = $nomeqrcode;
		$dados['titulo'] = 'qrcode';
		$this->load->view('partes/qrcode', $dados);
		
	}
}
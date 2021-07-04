<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function index() {

		$dados['titulo'] = 'Agenda - Painel';
	}

	public function storeColaborador($userC){

		$this->db->insert('usuario_colaborador', $userC);
	}
}

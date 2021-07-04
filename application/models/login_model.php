<?php

class Login_model extends CI_Model {
	

		/// USUÁRIO COLABORADOR
	public function storeColaborador($email, $senha){

		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$user = $this->db->get('usuario_colaborador')->row_array();
		return $user;
	}
 			
		/// USUÁRIO PESQUISADOR

	public function entrar($email, $senha){

		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$usuario = $this->db->get('usuario_pesquisador')->row_array();
		return $usuario;
	}	
	
	public function cadastrarUsuario($usuario){
		$this->db->insert('usuario_pesquisador', $usuario);
		$id=  $this->db->insert_id('usuario_pesquisador');
		return $id;
	}
	
	public function getUsuario($matricula){

		$this->db->where('matricula', $matricula);
		$usuario = $this->db->get('usuario_pesquisador')->row_array();
		return $usuario;
	}
}

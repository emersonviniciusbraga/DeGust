<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisas_model extends CI_Model {
	
	public function index() 
	{
		return $this->db->get("formulario")->result_array();
	}
	
	public function store($pesquisas) 
	{
		$this->db->insert("formulario", $pesquisas);
		$codigo_pesquisas = $this->db->insert_id();
			return $codigo_pesquisas;
	}

	public function show($idpesquisas){

		return $this->db->get_where('formulario', array('idformulario' => $idpesquisas))->row_array();

	}

	public function update($idpesquisas, $pesquisas){

		$this->db->where('idformulario', $idpesquisas);
		return $this->db->update('formulario', $pesquisas);
	}
	
	public function destroy($idpesquisas)
	{
		$this->db->where('idformulario', $idpesquisas);
		return $this->db->update('formulario');
	}

	public function buscarpesquisa($qrcode){
		$this->db->where('qrcode', $qrcode);
		return $this->db->get('formulario')->row_array();

	}
}

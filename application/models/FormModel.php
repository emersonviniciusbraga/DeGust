<?php 

class FormModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function inserir($table, $row){

        $this->db->insert($table, $row);
        return $this->db->insert_id();
    }

    public function listar($table, $id = null){

        if(is_null($id)){
            $result = $this->db->get($table);
            return $result->result_array();
        }

        $result = $this->db->get_where($table, array('idformulario' => $id));
        return $result->row_array();
    }


    public function get_perguntas($form_id){

        $result = $this->db
            ->from('pergunta')
            ->where('formulario_idformulario', $form_id)
            ->get();
        return $result->result_array();
    }

    public function get_alternativas($pergunta_id){

        $result = $this->db
            ->from('alternativa')
            ->where('pergunta_idpergunta', $pergunta_id)
            ->get();
        return $result->result_array();
    }

    public function save_respostas($respostas){

        $this->db->trans_start();
        foreach ($respostas as $resp){
            $this->db->insert('resposta', $resp);
        }
        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE){
            return false;
        }
        return true;
    }
}
?>
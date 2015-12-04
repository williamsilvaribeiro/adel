<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membros_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    
    function get($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array'){
        
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->limit($perpage,$start);
        
         $this->db->join('fotos','fotos.membro_id = membros.idMembro');
         //$this->db->join('item as imoveis', 'imoveis.item_id = tb003compromissos.item_id', "inner");
        
        //$this->db->order_by('codAgenda','desc');
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id){
        $this->db->join('fotos','fotos.membro_id = membros.idMembro');
        $this->db->where('idMembro',$id);
        $this->db->limit(1);
        return $this->db->get('membros')->row();
    }

    
    function add($table,$data,$returnId = false){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
                        if($returnId == true){
                            return $this->db->insert_id($table);
                        }
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function addFotos($table,$data,$returnId = false){
        $this->db->insert($table, $data);         
        if ($this->db->affected_rows() == '1')
		{
                        if($returnId == true){
                            return $this->db->insert_id($table);
                        }
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function edit($table,$data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;       
    }
    
    function delete($table,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;        
    }   

    function count($table){
	return $this->db->count_all($table);
    }

    function relatorioGeral($table,$where='',$one=false){
        
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('cargo','desc');
        if($where){
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }
    
    

    public function relatorioAniversarios($dataConsulta){
    $query = "SELECT * FROM membros WHERE MONTH(dataNascimento) = MONTH('".$dataConsulta."')";
        return $this->db->query($query)->result();
    }




}

/* End of file vendas_model.php */
/* Location: ./application/models/vendas_model.php */
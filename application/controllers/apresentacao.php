<?php

class Apresentacao extends CI_Controller {
    
    function __construct() {
        
        
        parent::__construct();
                
		
		$this->load->helper(array('form','codegen_helper'));
		$this->load->model('apresentacao_model','',TRUE);
		//$this->data['menuAgenda'] = 'Agenda';
	}	
	
	function index(){
		$this->gerenciar();
	}

	function gerenciar(){
            
             $this->load->library('pagination');
        
        
        $config['base_url'] = base_url().'index.php/apresentacao/gerenciar/';
        $config['total_rows'] = $this->apresentacao_model->count('apresentacao');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="col-sm-4 text-right text-center-xs"><ul class="pagination pagination-sm m-t-none m-b-none">';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
              	
        $this->pagination->initialize($config); 
            
        $this->data['results'] = $this->apresentacao_model->get('apresentacao','*','',$config['per_page'],$this->uri->segment(3));
             
        $this->data['view'] = 'apresentacao/apresentacao';
       	$this->load->view('tema/topo',$this->data);
       	
      
		
    }
    
    function adicionar(){
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';
        
        if ($this->form_validation->run('apresentacao') == false) {
           $this->data['custom_error'] = (validation_errors() ? true : false);
        } else {

            $dataApresentacao = $this->input->post('dataApresentacao');
            $dataNascimento = $this->input->post('dataNascimento');


            try {
                if ($dataApresentacao != null) {
                    $dataApresentacao = explode('/', $dataApresentacao);
                    $dataApresentacao = $dataApresentacao[2].'-'.$dataApresentacao[1].'-'.$dataApresentacao[0];
                }
                if ($dataNascimento != null) {
                    $dataNascimento = explode('/', $dataNascimento);
                    $dataNascimento = $dataNascimento[2].'-'.$dataNascimento[1].'-'.$dataNascimento[0];
                }
                 
            } catch (Exception $e) {
               $dataApresentacao = date('Y/m/d'); 
               $dataNascimento = date('Y/m/d'); 
            }

            $data = array(
                'nome' => $this->input->post('nome'),
                'sexo' => $this->input->post('sexo'),
                'dataApresentacao' => $dataApresentacao,
                'dataNascimento' => $dataNascimento,
                'nomePai' => $this->input->post('nomePai'),
                'nomeMae' => $this->input->post('nomeMae')
            );

            if (is_numeric($id = $this->apresentacao_model->add('apresentacao', $data, true)) ) {
                $this->session->set_flashdata('success','Crianca adicionado com sucesso.');
                redirect('apresentacao/gerenciar');

            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
         
        
        redirect('apresentacao/gerenciar');
    }
    

    
    function editar() {
        
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('apresentacao') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $dataApresentacao = $this->input->post('dataApresentacao');
            $dataNascimento = $this->input->post('dataNascimento');

            try {
                if ($dataApresentacao != null) {
                    $dataApresentacao = explode('/', $dataApresentacao);
                    $dataApresentacao = $dataApresentacao[2].'-'.$dataApresentacao[1].'-'.$dataApresentacao[0];
                }
                if ($dataNascimento != null) {
                    $dataNascimento = explode('/', $dataNascimento);
                    $dataNascimento = $dataNascimento[2].'-'.$dataNascimento[1].'-'.$dataNascimento[0];
                }
                 
            } catch (Exception $e) {
               $dataApresentacao = date('Y/m/d'); 
               $dataNascimento = date('Y/m/d'); 
            }

            $data = array(
                'nome' => $this->input->post('nome'),
                'sexo' => $this->input->post('sexo'),
                'dataApresentacao' => $dataApresentacao,
                'dataNascimento' => $dataNascimento,
                'nomePai' => $this->input->post('nomePai'),
                'nomeMae' => $this->input->post('nomeMae')
            );

            if ($this->apresentacao_model->edit('apresentacao', $data, 'idApresentacao', $this->input->post('id')) == TRUE) {
                $this->session->set_flashdata('success','Compromisso editada com sucesso!');
                  redirect('apresentacao/gerenciar');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

          redirect('apresentacao/gerenciar');
   
    }

    public function visualizar(){
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->membros_model->getById($this->uri->segment(3));
    
        $this->data['view'] = 'membros/visualizarMembros';
        $this->load->view('tema/topo', $this->data);
       
    }
    public function visualizarFichaCadastral(){
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->membros_model->getById($this->uri->segment(3));
    
        $this->data['view'] = 'relatorios/fichaCadastral';
        
        $this->load->view('tema/topoRelatorios',$this->data);
       
    }
    public function relatorioGeral(){
        $this->data['custom_error'] = '';
        $this->data['results'] = $this->membros_model->relatorioGeral('membros');
        
    
        $this->data['view'] = 'relatorios/relatorioGeral';
        
        $this->load->view('tema/topoRelatorios',$this->data);
       
    }
    public function relatorioPorCargo(){
        $this->data['custom_error'] = '';
        $this->data['results'] = $this->membros_model->relatorioGeral('membros');
        
    
        $this->data['view'] = 'relatorios/relatorioCargo';
        
        $this->load->view('tema/topoRelatorios',$this->data);
       
    }
	
    function excluir(){

        $id =  $this->input->post('id');
        if ($id == null){

            $this->session->set_flashdata('error','Erro ao tentar excluir Compromisso.');            
            redirect(base_url().'index.php/apresentacao/gerenciar/');
        }

       
        $this->db->where('idApresentacao', $id);
       
         if( $this->db->delete('apresentacao')){
             

        $this->session->set_flashdata('success','Criança excluída com sucesso!');            
        redirect('apresentacao/gerenciar/');
         };

    }
    



    public function autoCompleteCliente(){

        if (isset($_GET['term'])){
            $q = strtolower($_GET['term']);
            $this->vendas_model->autoCompleteCliente($q);
        }

    }


}
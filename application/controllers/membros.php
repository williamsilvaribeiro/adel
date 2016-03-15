<?php

class Membros extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'codegen_helper', 'validacaoutils_helper', 'gerenciararquivos_helper', 'dadosPaginas_helper'));
        $this->load->model('membros_model', '', TRUE);
        $this->data['menuAgenda'] = 'Agenda';
    }

    function index() {
        $this->gerenciar();
    }

    function gerenciar() {
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'membros/gerenciar/';
        $config['total_rows'] = $this->membros_model->count('membros');
        $config['per_page'] = 6;
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
        $this->data['results'] = $this->membros_model->get('membros', '*', '', $config['per_page'], $this->uri->segment(3));
        $this->data['view'] = 'membros/listarMembros';
        $this->load->view('tema/topo', $this->data);
    }

    function adicionar() {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('membros') == false) {
            $this->data['custom_error'] = (validation_errors() ? true : false);
        } else {
            $data = array(
                'nomeMembro' => $this->input->post('nomeMembro'),
                'candidatoBatismo' => $this->input->post('candidatoBatismo'),
                'dataBatismo' => ValidacaoUtils::validarData($this->input->post('dataBatismo')),
                'cargo' => $this->input->post('cargo'),
                'endereco' => $this->input->post('endereco'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'uf' => $this->input->post('uf'),
                'dataNascimento' => ValidacaoUtils::validarData($this->input->post('dataNascimento')),

                'sexo' => $this->input->post('sexo'),
                'estadoCivil' => $this->input->post('estadoCivil'),
                'telCelular' => $this->input->post('telCelular'),
                'telResidencial' => $this->input->post('telResidencial'),
                'rg' => $this->input->post('rg'),
                'emissorRg' => $this->input->post('emissorRg'),
                'cpf' => $this->input->post('cpf'),
                'numeroCertidao' => $this->input->post('numeroCertidao'),
                'livorCertidao' => $this->input->post('livorCertidao'),
                'folhaCertidao' => $this->input->post('folhaCertidao'),
                'cidadeCertidao' => $this->input->post('cidadeCertidao'),
                'naturalidade' => $this->input->post('naturalidade'),
                'ufNaturalidade' => $this->input->post('ufNaturalidade'),
                'locaBatismoAguas' => $this->input->post('locaBatismoAguas'),

                'dataBatismoAguas' => ValidacaoUtils::validarData($this->input->post('dataBatismoAguas')),
                'dataConversao' => ValidacaoUtils::validarData($this->input->post('dataConversao')),
                'isBatismoEspSanto' => $this->input->post('isBatismoEspSanto'),
                'matricula' => $this->input->post('matricula'),
                'localConversao' => $this->input->post('localConversao'),
                'grauInstrucao' => $this->input->post('grauInstrucao'),
                'nomePai' => $this->input->post('nomePai'),
                'nomeMae' => $this->input->post('nomeMae')
            );

            if (is_numeric($id = $this->membros_model->add('membros', $data, true))) {
                if ($this->gerenciarImagemMembro($id)) {
                    $this->session->set_flashdata('success', 'Compromisso iniciado com sucesso.');
                    redirect('membros/gerenciar');
                };

            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }

        $this->data['view'] = 'membros/adicionarMembros';
        $this->load->view('tema/topo', $this->data);
    }

    function editar() {
        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('membros') == false) {
            $this->data['custom_error'] = (validation_errors() ? true : false);
        } else {
            $data = array(
                'nomeMembro' => $this->input->post('nomeMembro'),
                'candidatoBatismo' => $this->input->post('candidatoBatismo'),
                'dataBatismo' => ValidacaoUtils::validarData($this->input->post('dataBatismo')),
                'cargo' => $this->input->post('cargo'),
                'endereco' => $this->input->post('endereco'),
                'bairro' => $this->input->post('bairro'),
                'cidade' => $this->input->post('cidade'),
                'uf' => $this->input->post('uf'),
                'dataNascimento' => ValidacaoUtils::validarData($this->input->post('dataNascimento')),

                'estadoCivil' => $this->input->post('estadoCivil'),
                'sexo' => $this->input->post('sexo'),
                'telCelular' => $this->input->post('telCelular'),
                'telResidencial' => $this->input->post('telResidencial'),
                'rg' => $this->input->post('rg'),
                'emissorRg' => $this->input->post('emissorRg'),
                'cpf' => $this->input->post('cpf'),
                'numeroCertidao' => $this->input->post('numeroCertidao'),
                'livorCertidao' => $this->input->post('livorCertidao'),
                'folhaCertidao' => $this->input->post('folhaCertidao'),
                'cidadeCertidao' => $this->input->post('cidadeCertidao'),
                'naturalidade' => $this->input->post('naturalidade'),
                'ufNaturalidade' => $this->input->post('ufNaturalidade'),
                'locaBatismoAguas' => $this->input->post('locaBatismoAguas'),
                'dataBatismoAguas' => ValidacaoUtils::validarData($this->input->post('dataBatismoAguas')),
                'isBatismoEspSanto' => $this->input->post('isBatismoEspSanto'),
                'grauInstrucao' => $this->input->post('grauInstrucao'),
                'nomePai' => $this->input->post('nomePai'),
                'nomeMae' => $this->input->post('nomeMae')
            );

            if ($this->membros_model->edit('membros', $data, 'idMembro', $this->input->post('idMembro')) == TRUE) {
                $this->session->set_flashdata('success', 'Membro editado com sucesso!');
                redirect(base_url() . 'membros/editar/' . $this->input->post('idMembro'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }

        $this->data['result'] = $this->membros_model->getById($this->uri->segment(3));
        $this->data['view'] = 'membros/editarMembros';
        $this->load->view('tema/topo', $this->data);

    }

    public function visualizar() {
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->membros_model->getById($this->uri->segment(3));

        $this->data['view'] = 'membros/visualizarMembros';
        $this->load->view('tema/topo', $this->data);

    }

    public function visualizarFichaCadastral() {
        $this->data['custom_error'] = '';
        $this->data['result'] = $this->membros_model->getById($this->uri->segment(3));

        $this->data['view'] = 'relatorios/imprimir/fichaCadastral';

        $this->load->view('tema/topoRelatorios', $this->data);

    }

    public function relatorioGeral() {
        $this->data['custom_error'] = '';
        $this->data['results'] = $this->membros_model->relatorioGeral('membros');


        $this->data['view'] = 'relatorios/relatorioGeral';

        $this->load->view('tema/topoRelatorios', $this->data);

    }

    public function relatorioPorCargo() {
        $this->data['custom_error'] = '';
        $this->data['results'] = $this->membros_model->relatorioGeral('membros');


        $this->data['view'] = 'relatorios/relatorioCargo';

        $this->load->view('tema/topoRelatorios', $this->data);

    }

    public function relatorioAniversariantes() {
        $this->data['view'] = 'relatorios/aniversariantes';
        $this->load->view('tema/topo', $this->data);
    }

    public function relatorioMembros() {
        $this->data['view'] = 'relatorios/membros';
        $this->load->view('tema/topo', $this->data);
    }

    public function visualizarAniversariantes() {
        $mes = $this->input->get('mes');
        $dataConsulta = date('Y-' . $mes . '-01');
        $this->data['results'] = $this->membros_model->relatorioAniversarios($dataConsulta);
        $this->data['view'] = 'relatorios/imprimir/relatorioAniversarios';
        $this->load->view('tema/topoRelatorios', $this->data);
    }

    public function visualizarAniversariantesMesAtual() {
        $dataConsulta = date('Y-m-01');
        $this->data['results'] = $this->membros_model->relatorioAniversarios($dataConsulta);
        $this->data['view'] = 'relatorios/imprimir/relatorioAniversarios';
        $this->load->view('tema/topoRelatorios', $this->data);
    }

    public function visualizarTodosMembros() {
        $this->data['results'] = $this->membros_model->relatoriosTodosMembros();
        $this->data['view'] = 'relatorios/imprimir/relatorioGeral';
        $this->load->view('tema/topoRelatorios', $this->data);
    }

    public function visualizarMembrosPorCargo() {
        $cargo = preg_replace('/[`^~\'"]/', '', $this->input->get('cargo'));
        if (!empty($cargo)) {
            $this->db->like("cargo", $cargo);
        }
        $this->data['results'] = $this->membros_model->relatoriosTodosMembros();
        $this->data['view'] = 'relatorios/imprimir/relatorioGeral';
        $this->load->view('tema/topoRelatorios', $this->data);
    }

    public function excluir() {
        $id = $this->input->post('id');
        if ($id == null) {
            $this->session->set_flashdata('error', 'Erro ao tentar excluir Membro .');
            redirect(base_url() . 'membros/gerenciar/');
        }
        $arquivoExcluir = 'fotosMembros/' . $this->input->post('arquivo') . '';
        if (unlink($arquivoExcluir)) {
            $this->session->set_flashdata('success', 'arquivo excluído com sucesso!');
        }
        $this->db->where('idMembro', $id);
        if ($this->db->delete('membros')) {
            $this->db->where('membro_id', $id);
            $this->db->delete('fotos');
            $this->session->set_flashdata('success', 'Membro excluído com sucesso!');
        }
        redirect(base_url() . 'membros/gerenciar/');
    }

    public function gerenciarImagemMembro($id) {
        if (!empty($_FILES['imagemMembro']['name'])) {
            $dataFoto = GerenciarArquivos::salvarImagemPasta($id, 'membro',
                'membro_id', 'fotosMembros/', 'imagemMembro');
        }
        if (!empty($this->input->post('idImagemAntiga')&& !empty($dataFoto) )) {
            $this->editarImagem($dataFoto, $id);
        } else if (!empty($dataFoto)) {
            $this->adicionarImagem($dataFoto);
        }else{
            $this->session->set_flashdata('error', 'Nenhuma foto selecionada!');
        }
        redirect(base_url() . 'membros/editar/' . $id);
    }

    private function adicionarImagem($dataFoto) {
        $this->membros_model->addFotos('fotos', $dataFoto);
    }

    private function editarImagem($dataFoto, $id) {
        $this->excluirImagenAntiga($dataFoto, $id);
        $this->session->set_flashdata('success', 'Imagem editada com sucesso!');
    }

    private function excluirImagenAntiga($dataFoto, $id) {
        $arquivoExcluir = 'fotosMembros/' . $this->input->post('arquivoImagemAntiga');
        if (unlink($arquivoExcluir)) {
            $this->session->set_flashdata('success', '');
        }
        $this->membros_model->edit('fotos', $dataFoto, 'membro_id', $id);
    }

    function adicionarAniversariante() {
        $data = array(
            'nomeAniversariante' => $this->input->post('nomeAniversariante'),
            'telefoneAniversariante' => $this->input->post('telefoneAniversariante'),
            'dataNascimento' => ValidacaoUtils::validarData($this->input->post('dataNascimento'))
        );

        if (is_numeric($id = $this->membros_model->add('aniversariantes', $data, true))) {
            $this->session->set_flashdata('success', 'Aniversariante adicionado com sucesso.');
        } else {
            $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
        }
        redirect('membros/gerenciar');
        $this->load->view('tema/topo', $this->data);
    }
}
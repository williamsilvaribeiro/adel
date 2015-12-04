<?php
include_once 'controleacesso_helper.php';


class ValidacaoUtils {
    public static function verificarLoginUtils($sessao) {
        if ((!$sessao->userdata('session_id')) || (!$sessao->userdata('logado'))) {
            redirect(DadosPaginas::LOGIN_SISTEMA);
        }
        if ((!$sessao->userdata('id'))) {
            $sessao->sess_destroy();
            redirect(DadosPaginas::LOGIN_SISTEMA);
        }
    }

    public static function verificarLoginSite($session) {
        if ((!$session->userdata('session_id')) || (!$session->userdata('logado'))) {
            if ($session->userdata('isMobile')) {
                redirect(DadosPaginas::LOGIN_SITE_MOBILE);
            }
            redirect(DadosPaginas::LOGIN_SITE);
        }
    }

    public static function validarData($data) {
        if ($data != null) {
            $data = explode('/', $data);
            $data = $data[2] . '-' . $data[1] . '-' . $data[0];
        } else {
            $data = NULL;
        }
        return $data;
    }

    public function carregarModelsPagina($modelPagina) {
        $this->load->model(array('principal_model', $modelPagina));
        $this->data['contasvencidas'] = $this->principal_model->getQtdContas();
        $this->data['atestadomedico'] = $this->principal_model->getQtdAtestadoMedico();
    }

    public function nivelTemAcessoPermitido($nivel, $controller) {
        if (in_array($controller, ControleAcesso::verificarAcessosPermitidos($nivel))) {
            return;
        }else{
            self::mensagemNaoTemPermissaoAcao();
        }
        ob_start();
    }

    public function mensagemNaoTemPermissaoAcao($sessao) {
        $this->session->set_flashdata('error', 'Voc&ecirc n&atildeo tem permiss&atildeo para essa a&ccedil;&atildeo.');
        redirect('principal/gerenciarSistema');
    }
}

?>

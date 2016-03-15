<?php

class DadosPaginas {
    const PG_TOPO_SISTEMA = 'sistema/temas/topoSistema';
    const PG_TOPO_RELATORIO = 'sistema/temas/topoRelatorios';
    const LOGIN_SISTEMA = 'principal/loginSistema';
    const LOGIN_SITE = 'principal/loginSite';
    const LOGIN_SITE_MOBILE = 'principal/loginSiteMobile';

    const PG_LOGIN_SITE = 'site/temas/loginSite';
    const FORM_VALIDATION = 'form_validation';

    public function layoutPaginacao($page, $totalRegistros) {

        $this->load->library('pagination');
        $config['base_url'] = base_url().''.$page;
        $config['total_rows'] = $totalRegistros;
        $config['per_page'] = 10;
        $config['next_link'] = 'Pr&oacute;xima';
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
        $config['last_link'] = '&Uacute;ltima';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        return $config;

    }

    public static function serverRoot(){
        return $_SERVER["DOCUMENT_ROOT"] . "/condominio/";
    }
}

?>
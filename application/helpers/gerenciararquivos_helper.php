<?php
include_once 'dadospaginas_helper.php';

class GerenciarArquivos extends CI_Controller {

    public function adicionarArquivoInformativo($id) {
        $nomeArquivo = $id . '-ArquivoAnexo' . date('dmYis');
        $parte = explode(".", $_FILES['anexoInformativo']['name']);
        if (isset($parte[1])) {
            $extensao = $parte[1];
        }
        self::cabecalhoUploadTodosArquivos('uploadAnexos', $nomeArquivo);
        $this->upload->do_upload('anexoInformativo');
        return $dadosAnexo = array('anexo_url' => $nomeArquivo . "." . $extensao, 'informativo_id' => $id);
    }

    public function salvarImagemPasta($id, $categoriaImagem, $referente, $pastaUpload, $idImagemHTML) {
        $nomeFoto = $id . "-" . $categoriaImagem . date('dmYis');
        $nomeFoto = $nomeFoto.'.png';
        $config = self::cabecalhoUploadImagem($pastaUpload, $nomeFoto);
        $this->upload->do_upload($idImagemHTML);
        return $dataFoto = array('foto_url' => $config['file_name'] . ".jpg", $referente => $id);
    }

    public function cabecalhoUploadImagem($pastaUpload, $nomeFoto) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $config['upload_path'] = $pastaUpload;
        $config['file_name'] = $nomeFoto;
        $this->load->library('upload', $config);
        return $config;
    }

    public function cabecalhoUploadTodosArquivos($pastaUpload, $nomeArquivo) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg|docx|doc|pdf|xls|xlsx';
        $config['max_size'] = '3000';
        $config['upload_path'] = $pastaUpload;
        $config['file_name'] = $nomeArquivo;
        $this->load->library('upload', $config);
        return $config;
    }

    public function salvarArquivoPasta($id, $categoriaArquivo, $referente, $pastaUpload, $idArquivoHTML) {
        $extensaoArquivo = self::buscarExtensaoArquivo($idArquivoHTML);
        $nomeArquivo = $id . "-" . $categoriaArquivo . date('dmYis');
        $config = self::cabecalhoUploadArquivos($pastaUpload, $nomeArquivo);
        if ($this->upload->do_upload($idArquivoHTML)) {
            return $dataArquivo = array('url_documento' => $config['file_name'] . '.' . $extensaoArquivo,
                $referente => $id);
        }
        return false;
    }

    private function buscarExtensaoArquivo($idArquivoHTML) {
        $extensaoArquivo = explode(".", $_FILES[$idArquivoHTML]['name']);
        return $extensaoArquivo[1];
    }

    public function cabecalhoUploadArquivos($pastaUpload, $nomeArquivo) {
        $config['allowed_types'] = 'docx|doc|pdf|xls|xlsx';
        $config['max_size'] = '3000';
        $config['upload_path'] = $pastaUpload;
        $config['file_name'] = $nomeArquivo;
        $this->load->library('upload', $config);
        return $config;
    }
}

?>

    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active" ><a data-toggle="tab" href="#tab0">Dados do Membro</a></li>
            <div class="buttons">
                <a id="fichaCadastral" title="Visualizar Ficha Cadastral" class="btn btn-mini btn-inverse" href="" style="  color: white;  padding: 1px 8px;  font-size: 12px;   background: #363636;"><i class="icon-print icon-white"></i> Imprimir Ficha</a>
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">
            <div class="accordion" id="collapse-group">


                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Dados Pessoais</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGTwo">
                        <div class="widget-content">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Código</strong></td>
                                        <td><a href="<?php echo base_url() ?>index.php/clientes/visualizar/<?php echo $result->cargo ?>"><?php echo $result->idMembro ?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Nome</strong></td>
                                        <td><?php echo $result->nomeMembro ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Data Nascimento</strong></td>

                                        <td><?php $dataNascimento = date(('d/m/Y'), strtotime($result->dataNascimento));
echo $dataNascimento ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Endereço</strong></td>
                                        <td><?php echo $result->endereco ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Bairro</strong></td>
                                        <td><?php echo $result->bairro ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Cidade</strong></td>
                                        <td><?php echo $result->cidade ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>UF</strong></td>
                                        <td><?php echo $result->uf ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Sexo</strong></td>
                                        <td><?php echo $result->sexo ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Telefone Celular</strong></td>
                                        <td><?php echo $result->telCelular ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Telefone Residencial</strong></td>
                                        <td><?php echo $result->telResidencial ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Naturalidade</strong></td>
                                        <td><?php echo $result->naturalidade ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>UF Naturalidade</strong></td>
                                        <td><?php echo $result->ufNaturalidade ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Grau de Instrução</strong></td>
                                        <td><?php echo $result->grauInstrucao ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Nome do Pai</strong></td>
                                        <td><?php echo $result->nomePai ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Nome da Mãe</strong></td>
                                        <td><?php echo $result->nomeMae ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Dados do Batismo</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered">
                                <tbody>

                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Candidato a Batismo</strong></td>
                                        <td><?php echo $result->candidatoBatismo ?></td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Data Batismo</strong></td>

                                        <td><?php $dataBatismo = date(('d/m/Y'), strtotime($result->dataBatismo));
echo $dataBatismo ?></td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Data Batismo nas Aguas</strong></td>

                                        <td><?php $dataBatismoAguas = date(('d/m/Y'), strtotime($result->dataBatismoAguas));
echo $dataBatismoAguas ?></td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Local Batismo nas Aguas</strong></td>
                                        <td><?php echo $result->locaBatismoAguas ?></td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Batismo Espirito Santo</strong></td>
                                        <td><?php echo $result->isBatismoEspSanto ?></td>
                                    </tr> 


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span><h5>Documentos</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGThree">
                        <div class="widget-content">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>RG</strong></td>
                                        <td><?php echo $result->rg ?></td>                                                </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Emissor RG</strong></td>
                                        <td><?php echo $result->emissorRg ?></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>CPF</strong></td>
                                        <td><?php echo $result->cpf ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Número Certidão</strong></td>
                                        <td><?php echo $result->numeroCertidao ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Livro Certidão</strong></td>
                                        <td><?php echo $result->livorCertidao ?></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: right"><strong>Folha Certidão</strong></td>
                                        <td><?php echo $result->folhaCertidao ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Cidade Certidão</strong></td>
                                        <td><?php echo $result->cidadeCertidao ?></td>
                                    </tr>
                                </tbody>


                            </table>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script> 





        <script type="text/javascript">
            function abreFichaCadastral() {
                var url = "<?php echo base_url() ?>index.php/membros/visualizarFichaCadastral/<?php echo $result->idMembro ?>";
                        var win = window.open(url, name = "_blank", "left=400,top=300,width=700,height=500,location=no,menubar=no,toolbar=no");

                        win.print();
                    }


                    $(document).ready(function() {
                        $("#fichaCadastral").click(function() {
                            abreFichaCadastral();
                            return false;
                        })
                    });


        </script>
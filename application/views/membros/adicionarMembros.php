<script src="<?php echo base_url() ?>js/valida.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>


<div class="m-b-md">
    <h3 class="m-b-none">Cadastro de Membros</h3>
</div>
<div class="row">

</div>

<section class="panel panel-default">
    <header class="panel-heading font-bold" style="background-color: #BFC5CA">
        Ficha Cadastral
    </header>
    <div class="panel-body">

        <?php if ($custom_error == true) { ?>
            <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os
                campos com asterisco ou se selecionou corretamente cliente e responsável.
            </div>
        <?php } ?>

        <?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'formMembros');
        echo form_open_multipart("membros/adicionar/", $attributes);
        ?>

        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Candidato a Batismo</labelNegrito>
            <div class="col-sm-6">
                <select name="candidatoBatismo" class="form-control">
                    <option>Sim</option>
                    <option>Não</option>

                </select>

            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite a Matricula do Membro">

            </div>

        </div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Datas</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-3">

                        <input id="dataNascimento" class="form-control" type="text" name="dataNascimento"
                               placeholder="Data de Nascimento" maxlength="10" onKeyDown="Mascara(this, Data);"
                               onKelayPress="Mascara(this, Data);" onKeyUp="Mascara(this, Data);"/>
                    </div>

                    <div class="col-md-3">
                        <input id="dataBatismo" class="form-control" type="text" name="dataBatismo"
                               placeholder="Data do Batismo" maxlength="10" onKeyDown="Mascara(this, Data);"
                               onKeyPress="Mascara(this, Data);" onKeyUp="Mascara(this, Data);"/>
                    </div>

                    <div class="col-md-3">
                        <input id="dataBatismoAguas" class="form-control" type="text" name="dataBatismoAguas"
                               placeholder="Data Batismo nas Aguas" maxlength="10" onKeyDown="Mascara(this, Data);"
                               onKeyPress="Mascara(this, Data);" onKeyUp="Mascara(this, Data);"/>
                    </div>
                    <div class="col-md-3">
                        <input id="dataConversao" class="form-control" type="text" name="dataConversao"
                               placeholder="Data Conversão" maxlength="10" onKeyDown="Mascara(this, Data);"
                               onKeyPress="Mascara(this, Data);" onKeyUp="Mascara(this, Data);"/>
                    </div>

                </div>
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Nome</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="nomeMembro" name="nomeMembro">
                    </div>
                    <div class="col-md-4">

                        <select name="cargo" class="form-control">
                            <option>Novo Convertido</option>
                            <option>Congregado</option>
                            <option>Membro</option>
                            <option>Auxiliar</option>
                            <option>Diacono</option>
                            <option>Diaconisa</option>
                            <option>Presbitero(a)</option>
                            <option>Missionário(a)</option>
                            <option>Evangelista(a)</option>
                            <option>Pastor(a)</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Endereço</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-8">
                        <input name="endereco" id="endereco" type="text" style="" class="form-control"
                               placeholder="Endereço">
                    </div>

                    <div class="col-md-4">

                        <select name="bairro" class="form-control">
                            <option>Vila Juracy</option>
                            <option>Mandú II</option>
                            <option>Setor Leste</option>
                            <option>Parque JK</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Cidade</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-8">
                        <select name="cidade" class="form-control">
                            <option>Luziania</option>
                            <option>Valparaizo de Goiás</option>
                            <option>C. Ocidental</option>
                            <option>Cristalina</option>
                        </select>
                    </div>
                    <div class="col-md-4">

                        <select name="uf" class="form-control">
                            <option>Goiás</option>
                            <option>Distrito Federal</option>
                            <option>Minas Gerais</option>

                        </select>
                    </div>

                </div>
            </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Estado Civil</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-6">
                        <select name="estadoCivil" class="form-control">
                            <option>Solteiro(a)</option>
                            <option>Casado(a)</option>
                            <option>Divorciado(a)</option>
                            <option>Viuvo(a)</option>

                        </select>
                    </div>
                    <div class="col-md-6">

                        <select name="sexo" class="form-control">
                            <option>Masculino</option>
                            <option>Feminino</option>

                        </select>
                    </div>

                </div>
            </div>
        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Telefones</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-6">

                        <input id="telCelular" name="telCelular" type="text" class="form-control" placeholder="Celular"
                               placeholder="CPF" maxlength="14" onKeyDown="Mascara(this, Telefone);"
                               onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);">
                    </div>

                    <div class="col-md-6">
                        <input id="telResidencial" id="telResidencial" type="text" class="form-control"
                               placeholder="Residencial" maxlength="14" onKeyDown="Mascara(this, Telefone);"
                               onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);">
                    </div>

                </div>
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Documentos</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-4">

                        <input id="rg" name="rg" type="text" class="form-control" placeholder="Identidade"
                               onKeyDown="Mascara(this, rga);" onKeyPress="Mascara(this, rga);"
                               onKeyUp="Mascara(this, rga);">
                    </div>

                    <div class="col-md-4">
                        <input id="emissorRg" name="emissorRg" type="text" class="form-control"
                               placeholder="Orgão Expeditor">
                    </div>

                    <div class="col-md-4">
                        <input id="cpf" name="cpf" type="text" class="form-control" placeholder="cpf" placeholder="CPF"
                               maxlength="14" onKeyDown="Mascara(this, Cpf);" onKeyPress="Mascara(this, Cpf);"
                               onKeyUp="Mascara(this, Cpf);">
                    </div>

                </div>
            </div>
        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Natural</labelNegrito>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-md-8">
                        <input id="naturalidade" name="naturalidade" type="text" class="form-control"
                               placeholder="Cidade onde nasceu">
                    </div>
                    <div class="col-md-4">

                        <select name="ufNaturalidade" class="form-control">
                            <option>Goiás</option>
                            <option>Distrito Federal</option>
                            <option>Minas Gerais</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Local</labelNegrito>
            <div class="col-sm-5">
                <input id="locaBatismoAguas" name="locaBatismoAguas" type="text" class="form-control"
                       placeholder="Local Batismo nas aguas">
            </div><div class="col-sm-5">
                <input id="locaConversao" name="locaConversao" type="text" class="form-control"
                       placeholder="Local da Conversao">
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>


        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Batismo Espirito Santo</labelNegrito>
            <div class="col-sm-10">
                <select name="isBatismoEspSanto" class="form-control">
                    <option>Sim</option>
                    <option>Não</option>

                </select>

            </div>

        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito">Grau de Instrução</labelNegrito>
            <div class="col-sm-10">
                <select name="grauInstrucao" class="form-control">
                    <option>Ensino Fundamental Incompleto</option>
                    <option>Ensino Fundamental Completo</option>
                    <option>Ensino Médio Incompleto</option>
                    <option>Ensino Médio Completo</option>
                    <option>Ensino Supeior Incompleto</option>
                    <option>Ensino Superior Completo</option>
                </select>

            </div>
        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito" for="input-id-1">Nome do Pai</labelNegrito>
            <div class="col-sm-10">
                <input id="nomePai" name="nomePai" type="text" class="form-control" id="input-id-1">
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito" for="input-id-1">Nome da Mãe</labelNegrito>
            <div class="col-sm-10">
                <input id="nomeMae" name="nomeMae" type="text" class="form-control" id="input-id-1">
            </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <labelNegrito class="col-sm-2 control-labelNegrito" for="Nome">Foto</labelNegrito>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="fotoMembro" name="fotoMembro">
            </div>
        </div>


        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
        <!--</form>-->


    </div>
</section>


<script type="text/javascript">
    $(document).ready(function () {


        $("#formMembros").validate({
            rules: {
                nomeMembro: {required: true},
                endereco: {required: true},
                telCelular: {required: true},
                telResidencial: {required: true},
                fotoMembro: {required: true},
                rg: {required: true}
            },
            messages: {
                nomeMembro: {required: 'Campo Requerido.'},
                endereco: {required: 'Campo Requerido.'},
                telCelular: {required: 'Campo Requerido.'},
                telResidencial: {required: 'Campo Requerido.'},
                fotoMembro: {required: 'Campo Requerido.'},
                rg: {required: 'Campo Requerido.'}
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });

        $(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});


    });

</script>







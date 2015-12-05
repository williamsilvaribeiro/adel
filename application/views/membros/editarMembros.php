<script src="<?php echo base_url() ?>js/valida.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>
<form class="row-fluid" style="margin-top:0">
    <div class="span12">

        <form action="<?php echo current_url(); ?>" method="post" id="formMembros" >
            <?php echo form_hidden('idMembro', $result->idMembro) ?>


        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Editar Membro</h5>
            </div>
            <section class="panel panel-default">
                <header class="panel-heading text-right bg-light">
                    <ul class="nav nav-tabs pull-left">
                        <li class="active">
                            <a href="#profile-1" data-toggle="tab"><i class="fa fa-user text-muted"></i>
                                Dados Pessoais do Membro
                            </a>
                        </li>
                        <li >
                            <a href="#profile-2" data-toggle="tab"><i class="fa fa-users text-muted"></i>
                                Dados Eclesiasticos do Membro
                            </a>
                        </li>
                        <li>
                            <a href="#profile-3" data-toggle="tab"><i class="fa fa-users text-muted"></i>
                                Observacoes
                            </a>
                        </li>
                    </ul>
                    <span class="hidden-sm">Informacoes referentes aos Prestadores de Servicos</span>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="profile-1">

                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    Dados Pessoais
                                </header>

                                <div class="panel-body">

                                    <?php if ($result->foto_url != "" || $result->foto_url != null) { ?>
                                        <div class="form-group" style="margin-top: -20px;">
                                            <label class="col-sm-2 control-label">Foto</label>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-2 ">
                                                        <a href="#modalEditarFoto" role="button"
                                                           data-toggle="modal">
                                                            <img
                                                                src="<?php echo base_url() ?>fotosMembros/<?php echo $result->foto_url ?> "
                                                                class="dker img-thumbnail" alt="...">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form-group" style="">
                                            <label class="col-sm-2 control-label">Foto</label>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <h4>Não há imagem cadastrata para
                                                            o(a) <?php echo $result->cargo . " " . $result->nm_morador ?>
                                                            . Por favor, <a href="#modalCadastrarFoto"
                                                                            class="sumb" role="button"
                                                                            data-toggle="modal">clique aqui</a>
                                                            para cadastrar uma imagem.</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Data Nascimento</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="dataNascimento" class="form-control" type="text"
                                                       name="dataNascimento"
                                                       value="<?php echo date('d/m/Y', strtotime($result->dataNascimento)) ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="nomeMembro"
                                                       name="nomeMembro"
                                                       value="<?php echo $result->nomeMembro ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Endereco</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input name="endereco" id="endereco" type="text" style=""
                                                       class="form-control"
                                                       value="<?php echo $result->endereco ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Cidade</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <select name="cidade" class="form-control">
                                                    <option><?php echo $result->cidade ?></option>
                                                    <option>Luziania</option>
                                                    <option>Valparaizo de Goiás</option>
                                                    <option>C. Ocidental</option>
                                                    <option>Cristalina</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Bairro</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">

                                                <select name="bairro" class="form-control">
                                                    <option><?php echo $result->bairro ?></option>
                                                    <option>Vila Juracy</option>
                                                    <option>Mandú II</option>
                                                    <option>Setor Leste</option>
                                                    <option>Parque JK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">UF</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">

                                                <select name="uf" class="form-control">
                                                    <option><?php echo $result->uf ?></option>
                                                    <option>Goiás</option>
                                                    <option>Distrito Federal</option>
                                                    <option>Minas Gerais</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Estado Civil</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <select name="estadoCivil" class="form-control">
                                                    <option><?php echo $result->estadoCivil ?></option>
                                                    <option>Solteiro(a)</option>
                                                    <option>Casado(a)</option>
                                                    <option>Divorciado(a)</option>
                                                    <option>Viuvo(a)</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Sexo</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">

                                                <select name="sexo" class="form-control">
                                                    <option><?php echo $result->sexo ?></option>
                                                    <option>Masculino</option>
                                                    <option>Feminino</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefone Celular</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="telCelular" name="telCelular" type="text"
                                                       class="form-control"
                                                       value="<?php echo $result->telCelular ?>" maxlength="14"
                                                       onKeyDown="Mascara(this, Telefone);"
                                                       onKeyPress="Mascara(this, Telefone);"
                                                       onKeyUp="Mascara(this, Telefone);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefone Residencial</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="telResidencial" id="telResidencial" type="text"
                                                       class="form-control"
                                                       value="<?php echo $result->telResidencial ?>" maxlength="14"
                                                       onKeyDown="Mascara(this, Telefone);"
                                                       onKeyPress="Mascara(this, Telefone);"
                                                       onKeyUp="Mascara(this, Telefone);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CPF</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="cpf" name="cpf" type="text" class="form-control"
                                                       value="<?php echo $result->cpf ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">RG</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="rg" name="rg" type="text" class="form-control"
                                                       placeholder="Identidade"
                                                       maxlength="10" onKeyDown="Mascara(this, rga);"
                                                       onKeyPress="Mascara(this, rga);"
                                                       onKeyUp="Mascara(this, rga);" value="<?php echo $result->rg ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Emissor RG</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="emissorRg" name="emissorRg" type="text" class="form-control"
                                                       value="<?php echo $result->emissorRg ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Natural (Cidade)</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="naturalidade" name="naturalidade" type="text"
                                                       class="form-control"
                                                       value="<?php echo $result->naturalidade ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Natural Estado</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">

                                                <select name="ufNaturalidade" class="form-control">
                                                    <option><?php echo $result->ufNaturalidade ?></option>
                                                    <option>Goiás</option>
                                                    <option>Distrito Federal</option>
                                                    <option>Minas Gerais</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Grau de Instrucoes</label>

                                        <div class="col-sm-10">
                                            <div class="col-sm-10">
                                                <select name="grauInstrucao" class="form-control">
                                                    <option><?php echo $result->grauInstrucao ?></option>
                                                    <option>Ensino Fundamental Incompleto</option>
                                                    <option>Ensino Fundamental Completo</option>
                                                    <option>Ensino Médio Incompleto</option>
                                                    <option>Ensino Médio Completo</option>
                                                    <option>Ensino Supeior Incompleto</option>
                                                    <option>Ensino Superior Completo</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome do Pai</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="nomePai" name="nomePai" type="text" class="form-control"
                                                       id="input-id-1"
                                                       value="<?php echo $result->nomePai ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome da Mae</label>

                                        <div class="col-sm-10">
                                            <div class="col-md-10">
                                                <input id="nomeMae" name="nomeMae" type="text" class="form-control"
                                                       id="input-id-1"
                                                       value="<?php echo $result->nomeMae ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>


                        </div>
                        <div class="tab-pane fade " id="profile-2">
                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    Dados Eclesiasticos
                                </header>


                                <div class="panel-body">


                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Matricula</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input id="matricula" class="form-control" type="text"
                                                           name="matricula"
                                                           value="<?php echo $result->matricula ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Candidato a Batismo</label>

                                        <div class="col-md-10">
                                            <select name="candidatoBatismo" class="form-control">
                                                <option><?php echo $result->candidatoBatismo ?></option>
                                                <option>Sim</option>
                                                <option>Não</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Datas Batismo</label>

                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input id="dataBatismo" class="form-control" type="text" name="dataBatismo"
                                                           value="<?php echo date('d/m/Y', strtotime($result->dataBatismo)) ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Batismo Espirito Santo</label>

                                        <div class="col-sm-10">
                                            <select name="isBatismoEspSanto" class="form-control">
                                                <option><?php echo $result->isBatismoEspSanto ?></option>
                                                <option>Sim</option>
                                                <option>Não</option>

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Datas Batismo Aguas</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input id="dataBatismoAguas" class="form-control" type="text"
                                                                name="dataBatismoAguas"
                                                                value="<?php echo date('d/m/Y', strtotime($result->dataBatismoAguas)) ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Local Batismo Aguas </label>

                                        <div class="col-sm-10">
                                            <input id="locaBatismoAguas" name="locaBatismoAguas" type="text" class="form-control"
                                                   value="<?php echo $result->locaBatismoAguas ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Datas Conversao</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input id="dataConversao" class="form-control" type="text"
                                                           name="dataConversao"
                                                           value="<?php echo date('d/m/Y', strtotime($result->dataConversao)) ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Local Conversao </label>

                                        <div class="col-sm-10">
                                            <input id="locaConversao" name="locaConversao" type="text" class="form-control"
                                                   value="<?php echo $result->locaConversao ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-labelNegrito">Cargo / Funcao</label>

                                        <div class="col-sm-10">
                                            <div class="row">

                                                <div class="col-md-10">
                                                    <select name="cargo" class="form-control">
                                                        <option><?php echo $result->cargo ?></option>
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


                                </div>


                            </section>


                        </div>
                        <div class="tab-pane fade " id="profile-3">
                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    Observacoes
                                </header>
                                <div class="panel-body">


                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i
                                                            class="fa fa-font"></i><b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                                       title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a data-edit="fontSize 5"><font size="5">Grande</font></a></li>
                                                        <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                                        <li><a data-edit="fontSize 1"><font size="1">Pequena</font></a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm" data-edit="bold" title="Negrito (Ctrl/Cmd+B)"><i
                                                            class="fa fa-bold"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                                            class="fa fa-italic"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i
                                                            class="fa fa-strikethrough"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                                            class="fa fa-underline"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i
                                                            class="fa fa-list-ul"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i
                                                            class="fa fa-list-ol"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                                            class="fa fa-dedent"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i
                                                            class="fa fa-indent"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm" data-edit="justifyleft"
                                                       title="Alinhar Esquerda (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                                            class="fa fa-align-center"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifyright"
                                                       title="Align Direita (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justificar (Ctrl/Cmd+J)"><i
                                                            class="fa fa-align-justify"></i></a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"
                                                       title="Hyperlink"><i class="fa fa-link"></i></a>

                                                    <div class="dropdown-menu">
                                                        <div class="input-group m-l-xs m-r-xs">
                                                            <input class="form-control input-sm" placeholder="URL" type="text"
                                                                   data-edit="createLink"/>

                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default btn-sm" type="button">Adicionar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i
                                                            class="fa fa-cut"></i></a>
                                                </div>

                                                <div class="btn-group hide">
                                                    <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)"
                                                       id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                                                           data-edit="insertImage"/>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm" data-edit="undo" title="Desfazer (Ctrl/Cmd+Z)"><i
                                                            class="fa fa-undo"></i></a>
                                                    <a class="btn btn-default btn-sm" data-edit="redo" title="Refazer (Ctrl/Cmd+Y)"><i
                                                            class="fa fa-repeat"></i></a>
                                                </div>
                                            </div>
                                            <div id="editor" name="editor" class="form-control"
                                                 style="overflow:scroll;height:250px;max-height:250px">Digite aqui a observacoes.....
                                            </div>
                                            <input type="hidden" id="descricao" name="descricao"/>
                                        </div>
                                    </div>


                                </div>


                            </section>


                        </div>
                    </div>
            </section>
        </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <button class="btn btn-primary">Editar</button>
                </div>
            </div>
    </div>

</form>

</div>

<div class="modal fade" id="modalEditarFoto">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>index.php/membros/editarImagemDiretoriaEditar" method="post"
                  enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 id="myModalLabel">Editar Foto do(a) Membros</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idImagem" name="id" value="<?php echo $result->membro_id ?>"/>
                    <input type="hidden" id="idImagemBD" name="idImagemBD"
                           value="<?php echo $result->idFotos ?>"/>
                    <input type="hidden" id="categoriaEditarFoto" name="categoriaEditarFoto" value="corpoDiretivo"/>
                    <input type="hidden" id="urlarquivos" name="arquivo" value="<?php echo $result->foto_url ?>"/>
                    <h5 style="text-align: center">Escolha a nova foto</h5>

                    <div class="form-control">
                        <input type="file" id="imagemMembro" name="imagemEditarMembro" onchange="loadFile(event)">
                        <input type="hidden" id="nomeEditarFoto" name="nomeEditarFoto" class="form-control">
                    </div>
                    <img id="image_preview" style=" margin-top: 10px;"/>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="submit">Editar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    var loadFile = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('image_preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
<script>
    $(document).ready(function () {
        $("#imagemMembro").change(function () {
            $("#image_preview").css({"height": "200px", "width": "200px;"});
        });
        $("#imagem1").change(function () {
            $("#image_preview1").css({"height": "200px", "width": "200px;"});
        });

        $('input:file').change(function () {
            var nome_arq = $(this).val().split("\\").pop();
            $("#nomeEditarFoto").val(nome_arq);
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {

        $("#formEditarMorador").validate({
            rules: {
                nm_morador: {required: true},
                nr_apartamento: {required: true},
                dataEntrada: {required: true}
            },
            messages: {
                nm_morador: {required: 'Campo Requerido.'},
                nr_apartamento: {required: 'Campo Requerido.'},
                dataEntrada: {required: 'Campo Requerido.'}
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
        $(".money").maskMoney();
    });

    $("#formMembros").submit(function (event) {
        var text = $("#editor").html();
        $("#observacoes").val(text);
        console.log(event);

    });

</script>


<style>
    .form-control{
        margin-top: 2%;
    }
    .control-label{
    }
</style>
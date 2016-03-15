<script src="<?php echo base_url() ?>js/valida.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>


<div class="m-b-md">
    <h3 class="m-b-none">Membros Cadastros</h3>
</div>

<!--                    <div class="row wrapper">-->


<div class="row">
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
    </div>
</div>
<section class="panel panel-default">
    <header class="panel-heading">
        Listagem de Membros Cadastros
    </header>
    <div class="row wrapper">
        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Procurar Membro">
                                    <span class="input-group-btn">
                                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                                    </span>
            </div>
        </div>
        <a href="<?php echo base_url(); ?>membros/adicionar" class="btn btn-s-md btn-success">Adicionar</a>
        <a href="#modalCadastrarAniversarios" data-toggle="modal" class="btn btn-s-md btn-primary">Aniversariantes</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped b-t b-light">
            <thead>
            <tr>
                <th width="20"><label class="checkbox m-l m-t-none m-b-none i-checks"><input
                            type="checkbox"><i></i></label></th>
                <th width="30">#</th>
                <th width="30">#</th>
                <th class="th-sortable" data-toggle="class">Cargo
                                            <span class="th-sort">
                                                <i class="fa fa-sort-down text"></i>
                                                <i class="fa fa-sort-up text-active"></i>
                                                <i class="fa fa-sort"></i>
                                            </span>
                </th>

                <th>Nome</th>
                <th>Telefone</th>
                <th width="30"></th>
                <th width="30"></th>
                <th width="30"></th>


            </tr>
            </thead>


            <tbody>

            <?php
            foreach ($results as $r) {
                //$dataAgenda = date(('d/m/Y'),strtotime($r->dataAgenda));
                if (!empty($r->foto_url)) {
                    $imagem = base_url() . 'fotosMembros/' . $r->foto_url;
                } else {
                    $imagem = base_url() . 'assets/img/semImagem.jpg';
                }

                echo '<tr>';
                echo '<td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>';
                echo '<td>' . $r->idMembro . '</td>';
                echo '<td>  <span class="thumb avatar pull-left m-r">
                                                    <img src="' . $imagem . '" class="dker" alt="...">
                                                   
                                                </span> </td>';


                echo '<td>' . $r->cargo . '</td>';
                echo '<td>' . $r->nomeMembro . '</td>';
                echo '<td>' . $r->telCelular . '</td>';


                echo '<td>
                                           <a href="' . base_url() . 'membros/visualizar/' . $r->idMembro . '" title="Ver mais detalhes"><i class="icon-print"></i></a></td>';
                echo '<td>
                                           <a href="' . base_url() . 'membros/editar/' . $r->idMembro . '" title="Ver mais detalhes"><i class="icon-pencil"></i></a></td>';
                echo '<td>
                                <a href="#modalExcluirMembro" role="button" data-toggle="modal" idMembroDeletar="' . $r->idMembro . '" urlarquivo="' . $r->foto_url . '"  title="Excluir Morador"><i class="icon-remove" style="color:red"></i></a>
                            </td>';
                echo '</tr>';
            }
            ?>


            </tr>
            </tbody>
        </table>
    </div>
    <footer class="footer hidden-xs no-padder text-center-nav-xs">
        <a href="modal.lockme.html" data-toggle="ajaxModal"
           class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
            <i class="i i-logout"></i>
        </a>

        <?php echo $this->pagination->create_links(); ?>

        <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
            <i class="i i-circleleft text"></i>
            <i class="i i-circleright text-active"></i>
        </a>
    </footer>
</section>
</section>

<!--Excluir Membro-->
<div class="modal fade" id="modalExcluirMembro">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>membros/excluir" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 id="myModalLabel">Excluir Membro</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idMembroDelete" name="id" value=""/>
                    <input type="hidden" id="urlarquivos" name="arquivo" value=""/>
                    <h5 style="text-align: center">Deseja realmente excluir este Membro?</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!--Cadastrar Aniversarios-->
<div class="modal fade" id="modalCadastrarAniversarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>membros/adicionarAniversariante" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 id="myModalLabel">Cadastrar Aniversariantes</h5>
                </div>
                <div class="modal-body">
                    <!--                    <h5 style="text-align: center">Cadastro Provisorio</h5>-->
                    <div class="form-group">
                        <label class="col-sm-2 control-labelNegrito">Nome</label>

                        <div class="col-sm-10">
                            <div class="col-md-10">
                                <input id="nomeAniversariante" class="form-control" type="text"
                                       name="nomeAniversariante"
                                       placeholder="Nome" maxlength="25"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <labelNegrito class="col-sm-2 control-labelNegrito">Data Nascimento</labelNegrito>
                        <div class="col-sm-10">
                            <div class="col-md-6">
                                <input id="dataNascimento" class="form-control" type="text" name="dataNascimento"
                                       placeholder="Data de Nascimento" maxlength="10" onKeyDown="Mascara(this, Data);"
                                       onKelayPress="Mascara(this, Data);" onKeyUp="Mascara(this, Data);"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <labelNegrito class="col-sm-2 control-labelNegrito">Telefone</labelNegrito>
                        <div class="col-sm-10">
                            <div class="col-md-6">
                                <input id="telefoneAniversariante" class="form-control" type="text"
                                       name="telefoneAniversariante"
                                       placeholder="Telefone" maxlength="14" onKeyDown="Mascara(this, Telefone);"
                                       onKelayPress="Mascara(this, Data);" onKeyUp="Mascara(this, Telefone);"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-primary">Cadastrar Aniversário</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    $(document).on('click', 'a', function (event) {
        $('#idMembroDelete').val($(this).attr('idMembroDeletar'));
        $('#urlarquivos').val($(this).attr('urlarquivo'));
    });


</script>

<style>
    .form-control {
        margin-bottom: 10px;
    }

    .modal-body {
        margin-bottom: 100px;
    }
</style>
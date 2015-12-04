<script src="<?php echo base_url() ?>js/valida.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>


<div class="m-b-md">
    <h3 class="m-b-none">Crianças Apresentadas</h3>
</div>
<div class="row">
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
    </div>
</div>
<section class="panel panel-default">
    <header class="panel-heading">
        Listagem de Crianças Apresentadas
    </header>
    <div class="row wrapper">



        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Procurar Criança">
                <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
        <a href="#modalAdicionarAtestado"  data-toggle="modal" class="btn btn-s-md btn-success">Adicionar</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped b-t b-light">
            <thead>
                <tr>
                    <th width="20"><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox"><i></i></label></th>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data Nascimento</th>
                    <th>Data Apresentação</th>
                    <th>Mãe</th>
                    <th>Pai</th>
                    <th width="30"></th>
                    <th width="30"></th>
                    <th width="30"></th>


                </tr>
            </thead>


            <tbody>

                <?php

                foreach ($results as $r) {
                    $dataNascimento = date(('d/m/Y'), strtotime($r->dataNascimento));
                    $dataApresentacao = date(('d/m/Y'), strtotime($r->dataApresentacao));

                    echo '<tr>';
                    echo '<td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>';
                    echo '<td>' . $r->idApresentacao . '</td>';
                    echo '<td>' . $r->nome . '</td>';
                    echo '<td>' . $r->sexo . '</td>';
                    echo '<td>' . $dataNascimento . '</td>';
                    echo '<td>' . $dataApresentacao . '</td>';
                    
                    echo '<td>' . $r->nomeMae . '</td>';
                    echo '<td>' . $r->nomePai . '</td>';


                    echo '<td>
                                           <a href="' . base_url() . 'index.php/morador/visualizar/' . $r->idApresentacao . '" title="Ver mais detalhes"><i class="icon-eye-open"></i></a></td>';
                    echo '<td>
                                           <a href="' . base_url() . 'index.php/morador/editar/' . $r->idApresentacao . '" title="Editar"><i class="icon-pencil"></i></a></td>';
                    echo '<td>
                                           
                                        <a href="#modal-form" role="button" data-toggle="modal" apresentacaoid="' . $r->idApresentacao . '"  title="Excluir Morador"><i class="icon-remove" style="color:red"></i></a>  
                                        
</td>';
                    echo '</tr>';
                }
                ?>



                </tr>
            </tbody>
        </table>
    </div>
    <footer class="footer hidden-xs no-padder text-center-nav-xs">
        <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
            <i class="i i-logout"></i>
        </a>

        <?php echo $this->pagination->create_links(); ?>

        <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
            <i class="i i-circleleft text"></i>
            <i class="i i-circleright text-active"></i>
        </a>

    </footer>
</section>


<div class="modal fade" id="modalAdicionarAtestado">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="m-b-none">Adicionar Criança para Apresentação</h3>
            </div>
            <div class="panel-body">

                <form class="form-horizontal" id="formAdicionarMudanca" action="<?php echo base_url() ?>index.php/apresentacao/adicionar" method="post">
 
                     <div class="form-group">
                                <label class="col-sm-2 control-labelNegrito">Datas</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <input id="dataNascimento" class="span12 datepicker" type="text" name="dataNascimento"  placeholder="Data de Nascimento"  />
                                        </div>

                                        <div class="col-md-4">
                                            <input id="dataApresentacao" class="span12 datepicker" type="text" name="dataApresentacao" placeholder="Data da Apresentação"  />
                                        </div>


                                    </div>
                                </div>
                            </div>  
                    
                    <div class="form-group">
                                <label class="col-sm-2 control-labelNegrito">Nome</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-8" >
                                            <input type="text" class="form-control" id="nome" name="nome">
                                        </div>
                                        <div class="col-md-4">

                                            <select name="sexo" class="form-control">
                                                <option value="">Sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-labelNegrito" for="morador">Nome Pai*</label>
                        <div class="col-lg-10">
                            <input id="nomePai" type="text" name="nomePai" class="form-control" >
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-lg-2 control-labelNegrito" for="morador">Mãe*</label>
                        <div class="col-lg-10">
                            <input id="nomeMae" type="text" name="nomeMae" class="form-control" >
                        </div>
                    </div>




                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        <button class="btn btn-primary">Cadastrar</button>
                    </div>
                    
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>




<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
        <div class="modal-content">




            <form action="<?php echo base_url() ?>index.php/apresentacao/excluir" method="post" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 id="myModalLabel">Excluir Criança</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idApresentacao" name="id" value="" />
                    <h5 style="text-align: center">Deseja realmente excluir esta Criança?</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-danger">Excluir</button>
                </div>
            </form>






        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<script type="text/javascript">
    $(document).on('click', 'a', function(event) {
        var apres = $(this).attr('apresentacaoid');
        $('#idApresentacao').val(apres);

    });


    $(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});


</script>




<!-- Modal -->
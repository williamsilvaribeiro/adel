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
                            <a href="<?php echo base_url(); ?>index.php/membros/adicionar" class="btn btn-s-md btn-success">Adicionar</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th width="20"><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox"><i></i></label></th>
                                        <th>#</th>
                                        <th>#</th>
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

                                        echo '<tr>';
                                        echo '<td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td>';
                                        echo '<td>' . $r->idMembro . '</td>';
                                        echo '<td>  <span class="thumb avatar pull-left m-r">                        
                                                    <img src="' . base_url() . '/fotosMembros/' . $r->foto_url . '" class="dker" alt="...">
                                                   
                                                </span> </td>';



                                        echo '<td>' . $r->cargo . '</td>';
                                        echo '<td>' . $r->nomeMembro . '</td>';
                                        echo '<td>' . $r->telCelular . '</td>';


                                        echo '<td>
                                           <a href="' . base_url() . 'index.php/membros/visualizar/' . $r->idMembro . '" title="Ver mais detalhes"><i class="icon-print"></i></a></td>';
                                        echo '<td>
                                           <a href="' . base_url() . 'index.php/membros/editar/' . $r->idMembro . '" title="Ver mais detalhes"><i class="icon-pencil"></i></a></td>';
                                       echo '<td>
                                <a href="#modalExcluirMembro" role="button" data-toggle="modal" idAtestado="' . $r->idMembro . '"  title="Excluir Morador"><i class="icon-remove" style="color:red"></i></a>  
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
                            
                              <?php echo $this->pagination->create_links();?>
                              
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
            <form action="<?php echo base_url() ?>index.php/membros/excluir" method="post" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 id="myModalLabel">Excluir Membro</h5>
                </div>
                <div class="modal-body">
                    <input type="text" id="idMembro" name="id" value="" />
                    <h5 style="text-align: center">Deseja realmente excluir este Membro?</h5>
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
    function abrePopup() {
        var url = "<?php echo base_url() ?>index.php/relatorios/visualizarContratoVendas/<?php echo $result->idMembro ?>";
                var win = window.open(url, name = "_blank", "left=400,top=300,width=700,height=500,location=no,menubar=no,toolbar=no");
                win.print();
            }
            $(document).ready(function() {
                $("#visualizarContratos").click(function() {
                    abrePopup();
                    console.log(" foi");
                    return false;
                })






            });

            $(document).on('click', 'a', function(event) {

                var membros_id = $(this).attr('idAtestado');
                $('#idMembro').val(membros_id);

            });
            
            
            

</script>
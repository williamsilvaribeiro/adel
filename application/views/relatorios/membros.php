<script src="<?php echo base_url() ?>js/valida.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>


<div class="row-fluid" style="margin-top: 0">
    <div class="span4" style="float: left; width: 30%">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-list-alt"></i>
                </span>
                <h5>Todos os Membros</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">

                    <li><a href="#" id="todosMembros"><i class="icon-user"></i>
                            <small>Todos os Membros</small>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="span8"style="float: left;width: 70%">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-list-alt"></i>
                </span>
                <h5>Relatórios Customizáveis</h5>
            </div>
            <div class="widget-content">
                <div class="span12 well">
                    <div align="center">
                        
                    <form class="form-inline" action="<?php echo base_url()?>membros/visualizarMembrosPorCargo" name="formRelatorio" target="Postagem" method="get">
                        
                        <div class="form-group">
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
                         <button class="btn btn-inverse" type="submit" onclick="postaDados();" ><i class="icon-print icon-white"></i> Imprimir</button>
                    </form>   
                    </div>
                </div>
                .
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
   $(document).ready(function(){
        $("#imprimir").click(function(){         
            abreContratoLocador();
            return false;
        })
    });
    
function postaDados(url) {
window.open("about:blank", "Postagem", "left=400,top=300,width=700,height=500,location=no,menubar=yes,toolbar=no");
formRelatorio.submit();
}

function abreRelatorioMensal() {
        var url = "<?php echo base_url() ?>membros/visualizarAniversariantes";
        var win = window.open(url, name="_blank", "left=400,top=100,width=700,height=500,location=no,menubar=no,toolbar=no");
        win.print();
    };

   function relatorioTodosMembros() {
       var url = "<?php echo base_url() ?>membros/visualizarTodosMembros/";
       var win = window.open(url, name = "_blank", "left=400,top=300,width=700,height=500,location=no,menubar=no,toolbar=no");
       win.print();
   };

   $(document).ready(function () {
       $("#todosMembros").click(function () {
           relatorioTodosMembros();
           return false;
       })
   });
    $(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});
</script>




<!-- Modal -->
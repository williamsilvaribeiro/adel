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
                <h5>Aniversariantes mês atual</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">
                    <li><a href="<?php echo base_url()?>index.php/relatorios/clientesRapid"><i class="icon-user"></i> <small>Mês Atual </small></a></li>
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
                        
                    <form class="form-inline" action="<?php echo base_url()?>index.php/membros/visualizarAniversariantes" name="formRelatorio" target="Postagem" method="get">
                        
                        <div class="form-group">
                            <select name="mes"class="form-control">
                                <option value="01">Janeiro</option>
                                <option value="02">Fevereiro</option>
                                <option value="03">Março</option>
                                <option value="04">Abril</option>
                                <option value="05">Maio</option>
                                <option value="06">Junho</option>
                                <option value="07">Julho</option>
                                <option value="08">Agosto</option>
                                <option value="09">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
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
    
        var url = "<?php echo base_url() ?>index.php/membros/visualizarAniversariantes";
        var win = window.open(url, name="_blank", "left=400,top=100,width=700,height=500,location=no,menubar=no,toolbar=no");
           
        win.print();
    }
    
    $(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});


</script>




<!-- Modal -->
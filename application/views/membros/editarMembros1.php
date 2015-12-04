<script src="<?php echo base_url() ?>js/valida.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.validate.js"></script>


<div class="m-b-md">
    <h3 class="m-b-none">Editar Membros # <?php echo $result->idMembro ?></h3>
</div>
<div class="row">

</div>

<section class="panel panel-default">
    <header class="panel-heading font-bold" style="background-color: #BFC5CA">
        Ficha Cadastral - Editar Dados do Membro
    </header>
    <div class="panel-body">

        <?php if ($custom_error == true) { ?>
            <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os
                campos com asterisco ou se selecionou corretamente cliente e responsável.
            </div>
        <?php } ?>


        <form action="<?php echo current_url(); ?>" method="post" id="formMembros" class="form-horizontal">
            <?php echo form_hidden('idMembro', $result->idMembro) ?>




























            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <button class="btn btn-primary">Editar</button>
                </div>
            </div>

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
                rg: {required: true}
            },
            messages: {
                nomeMembro: {required: 'Campo Requerido.'},
                endereco: {required: 'Campo Requerido.'},
                telCelular: {required: 'Campo Requerido.'},
                telResidencial: {required: 'Campo Requerido.'},
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







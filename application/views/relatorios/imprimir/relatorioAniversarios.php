<html>
    <head>
        <title>Relatório de Membros - ADEL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="fichaCadastral">
            <span><img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="620" height="70"></span>
            <h1 align="center" > Relatorio Aniversário</h1>
            
<!--          --><?php //var_dump($results); ?>
        </div>
        
        
        <table border=1 cellspacing=0 cellpadding=4 style=" width: 100%;  font-family: sans-serif;  ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Nascimento</th>
                                        <th>Telefone</th>


                                    </tr>
                                </thead>


                                <tbody>

                                    <?php
                                    foreach ($results as $r) {
                                        $dataNascimento = date(('d/m/Y'),strtotime($r->dataNascimento));

                                        echo '<tr>';
                                        echo '<td>' . $r->codAniversario . '</td>';
                                        echo '<td>' . $r->nomeAniversariante . '</td>';
                                        echo '<td>' . $dataNascimento . '</td>';
                                        echo '<td>' . $r->telefoneAniversariante . '</td>';
                                       
                                    }
                                    ?>



                                    </tr>
                                </tbody>
                            </table>


    </body>
</html>
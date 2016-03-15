<html>
    <head>
        <title>Ficha de Cadastro de Membro - ADEL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="fichaCadastral">
            <span><img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="620" height="70"></span>
            <h1 align="center" > Ficha Cadastral</h1>
            
          <?php //var_dump($result); ?>
            
            <div align="center" style="border: 2px solid ; width: 78%; height: 120px; float: left; font-family: sans-serif; padding-left: 3% " >
                <h1><strong>Cargo:</strong><?php echo $result->cargo?> </h1>
                
                            <?php
            
            if( $result->candidatoBatismo=='Sim'){
            
             $dataBatismo= date(('d/m/Y'),strtotime($result->dataBatismo));
            
            echo 'Candidato a Batismo na data: '.$dataBatismo;
            }
            
            ?>
                
            </div>
            <div align="center" style="border: 2px solid ; width: 17%; height: 155px; float: left;margin-left: 3px; padding-top: 1px; " >
                 <span class="thumb avatar pull-left m-r">                        
                     <img src="<?php echo base_url(); ?>fotosMembros/<?php echo $result->foto_url ?>" width="112" height="150">
                    <i class="on md b-black"></i>
                </span>
            </div>
            <div align="left" style="border: 2px solid ; width: 81%; height: 30px;float: left; margin-top: -32px;  margin-bottom: 10px; " >
                <p style="font-family: sans-serif; margin-top: 5px; margin-left: 5px;">Congrecação: Vila Juravy</p>
            </div>


         
        </div>
        
        
            <table border=1 cellspacing=0 cellpadding=4  style=" width: 100%;  font-family: sans-serif; ">
                <tr>
                    <td colspan="5"><strong> Nome:&nbsp;</strong><?php echo $result->nomeMembro ?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Endereço:&nbsp;</strong><?php echo $result->endereco ?> </td>
                    <td colspan="3"><strong>Bairro:&nbsp;</strong><?php echo $result->bairro ?></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Cidade:&nbsp;</strong><?php echo $result->cidade ?> </td>
                    <td colspan="3"><strong>Estado:&nbsp;</strong><?php echo $result->uf ?></td>
                </tr>
                
                <tr>
                    <td colspan="2"><strong>Sexo: &nbsp;</strong><?php echo $result->sexo ?> </td>
                    <td colspan="3"><strong>Data Nascimento:&nbsp;</strong><?php $dataNascimento = date(('d/m/Y'),strtotime($result->dataNascimento)); echo $dataNascimento ?></td>
                </tr>
                
                <tr>
                    <td colspan="2"><strong>Telefone Res.:&nbsp;</strong> <?php echo $result->telResidencial ?></td>
                    <td colspan="3"><strong>Celular:&nbsp;</strong><?php echo $result->telCelular ?></td>
                </tr>
                
                <tr>
                    <td><strong>Identidade:&nbsp;</strong><?php echo $result->rg ?> </td>
                    <td><strong>SSP:&nbsp;</strong><?php echo $result->emissorRg ?></td>
                    <td colspan="3"><strong>CPF:&nbsp;</strong><?php echo $result->cpf ?></td>
                </tr>
                
                <tr>
                    <td><strong>Certidão Nasc. N&#186;:</strong> <?php echo $result->numeroCertidao ?></td>
                    <td><strong>Lv: </strong><?php echo $result->livorCertidao ?></td>
                    <td><strong>Fl: </strong><?php echo $result->folhaCertidao ?></td>
                    <td colspan="2"><strong>Cidade: </strong><?php echo $result->cidadeCertidao ?></td>
                </tr>
                
                <tr>
                    <td colspan="5"><strong>Estado Civil: &nbsp; </strong><?php echo $result->estadoCivil ?> </td>
                </tr>
                
                <tr>
                    <td colspan="2"><strong>Naturalidade:&nbsp;</strong> <?php echo $result->naturalidade ?></td>
                    <td colspan="3"><strong>Estado:&nbsp;</strong><?php echo $result->ufNaturalidade ?></td>
                </tr>
                
                             
                <tr>
                    <td colspan="2"><strong>Data Batismo nas Aguas:</strong><?php $dataBatismoAguas = date(('d/m/Y'),strtotime($result->dataBatismoAguas)); echo $dataBatismoAguas ?> </td>
                    <td colspan="3"><strong>Local:&nbsp;</strong><?php echo $result->locaBatismoAguas ?></td>
                </tr>
                
                <tr>
                    <td colspan="5"><strong>Batismo com Espírito Santo </strong>(<?php echo ($result->isBatismoEspSanto == 0) ? " X "  : ""; ?> )Sim ( <?php echo ($result->isBatismoEspSanto == 1) ? " X "  : ""; ?> )Não </td>
                    
                </tr>
                  <tr>
                    <td colspan="5"><strong>Grau de Instrução:&nbsp;</strong><?php echo $result->grauInstrucao ?></td>
                </tr>
                
                <tr>
                    <td colspan="5"><strong>Nome do Pai:&nbsp;</strong><?php echo $result->nomePai ?> </td>
                </tr>

                <tr>
                    <td colspan="5"><strong>Nome da Mãe:&nbsp;</strong><?php echo $result->nomeMae ?> </td>
                </tr>
                
                
            </table >
            
            <br>
            
            <table  border=1 cellspacing=0 cellpadding=4 style=" width: 100%; height:">
                <tr>
                    <td colspan="2" align="center">DADOS ECLESIÁSTICOS</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">(Não preencher em caso de batismo ou cadastro de membro)</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Auxiliar</td>
                    <td>Local</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Diacono (Isa)</td>
                    <td>Local</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Presbitero</td>
                    <td>Local</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Missionário(a)</td>
                    <td>Local</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Evangelista</td>
                    <td>Local</td>
                </tr>
                <tr>
                    <td style="width: 50%">Data Separação Pastor</td>
                    <td>Local</td>
                </tr>
                
            </table>


    </body>
</html>
<?php
$config = array('membros' => array(array(
                                    'field'=>'nomeMembro',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'endereco',
                                    'label'=>'Endereço',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telCelular',
                                    'label'=>'Sobrenome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telResidencial',
                                    'label'=>'Regime de Casamento',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'rg',
                                    'label'=>'RG',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nacionalidade',
                                    'label'=>'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                
                                array(
                                    'field'=>'estadoCivil',
                                    'label'=>'Estado Civil',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'profissao',
                                    'label'=>'Profissão',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'profissaoConjugue',
                                    'label'=>'Profissão',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'complend',
                                    'label'=>'Complemento endereço',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telefone',
                                    'label'=>'Telefone',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'celular',
                                    'label'=>'Celular',
//                                    'rules'=>'required|trim|xss_clean'
                                ),

                                array(
                                    'field'=>'nomeConjugue',
                                    'label'=>'Cônjugue',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nacionalidadeConjugue',
                                    'label'=>'Nacionalidade',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'rgConjugue',
                                    'label'=>'RG',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'emissorConjugue',
                                    'label'=>'Orgão Emissor',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cpfConjugue',
                                    'label'=>'CPF',
//                                    'rules'=>'required|trim|xss_clean'
                                ),


                                array(
                                    'field'=>'endereco',
                                    'label'=>'Endereço',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'emissor',
                                    'label'=>'Orgão Emissor RG',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cnh',
                                    'label'=>'CNH',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'emissorcnh',
                                    'label'=>'Orgão Emissor CNH',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
//                                    'rules'=>'required|trim|valid_email|xss_clean'
                                ),
                                
                                array(
                                    'field'=>'bairro',
                                    'label'=>'Bairro',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cidade',
                                    'label'=>'Cidade',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estado',
                                    'label'=>'Estado',
//                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cep',
                                    'label'=>'CEP',
//                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'apresentacao' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'descricao',
                                    'label'=>'',
                                   // 'rules'=>'trim|xss_clean'
                                ),
                                array(
                                    'field'=>'preco',
                                    'label'=>'',
                                   // 'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'produtos' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'usuarios' => array(array(
                                    'field'=>'nome',
                                    'label'=>'Nome',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'rg',
                                    'label'=>'RG',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cep',
                                    'label'=>'CEP',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                
                                array(
                                    'field'=>'nacionalidade',
                                    'label'=>'Nacionalidade',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estadoCivil',
                                    'label'=>'Estado Civil',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'emissorRg',
                                    'label'=>'Orgão Emissor RG',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'endereco',
                                    'label'=>'Endereço',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cpf',
                                    'label'=>'CPF',
                                    'rules'=>'required|trim|xss_clean|is_unique[usuarios.cpf]'
                                ),
                                array(
                                    'field'=>'rua',
                                    'label'=>'Rua',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'numero',
                                    'label'=>'Numero',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'bairro',
                                    'label'=>'Bairro',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cidade',
                                    'label'=>'Cidade',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'estado',
                                    'label'=>'Estado',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'email',
                                    'label'=>'Email',
                                    'rules'=>'required|trim|valid_email|xss_clean'
                                ),
                                array(
                                    'field'=>'senha',
                                    'label'=>'Senha',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'telefone',
                                    'label'=>'Telefone',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'situacao',
                                    'label'=>'Situacao',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,      
                'os' => array(array(

                                    'field' => 'dataInicial',
                                    'label' => 'Data da negocição',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'fgts',
                                    'label' => 'FGTS',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'comprador',
                                    'label' => 'Comprador',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                
                                array(

                                    'field' => 'entrada',
                                    'label' => 'Valor de Entrada',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'comprador',
                                   // 'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'vendedor_id',
                                    'label'=>'vendedor',
//                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'corretor',
                                    //'rules' => 'trim|xss_clean'
                                 ),
                                array(
                                    'field'=>'item_id',
                                    'label'=>'imoveis',
                                    //'rules' => 'trim|xss_clean'
                                 ))

                  ,
                'tiposUsuario' => array(array(
                                    'field'=>'nomeTipo',
                                    'label'=>'NomeTipo',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'situacao',
                                    'label'=>'Situacao',
                                    'rules'=>'required|trim|xss_clean'
                                ))

                ,
                'receita' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                        
                                array(
                                    'field'=>'cliente_fornecedor',
                                    'label'=>'Cliente',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'categoria',
                                    'label'=>'Categoria',
                                    //'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'baixado',
                                    'label'=>'Pago',
                                    //'rules'=>'required|trim|xss_clean'
                                ),    
                                array(
                                    'field'=>'repetir',
                                    'label'=>'repetir',
//                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'despesa' => array(array(
                                    'field'=>'descricao',
                                    'label'=>'Descrição',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'valor',
                                    'label'=>'Valor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'vencimento',
                                    'label'=>'Data Vencimento',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'cliente_fornecedor',
                                    'label'=>'Fornecedor',
                                    'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'baixado',
                                    'label'=>'Pago',
                                    //'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'tipo',
                                    'label'=>'Tipo',
                                    'rules'=>'required|trim|xss_clean'
                                ))
                ,
                'vendas' => array(
                    
                                array(

                                    'field' => 'dataVenda',
                                    'label' => 'Data da Venda',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'fgts',
                                    'label' => 'FGTS',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'entrada',
                                    'label' => 'Valor de Entrada',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'comprador',
                                   // 'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'vendedor_id',
                                    'label'=>'vendedor',
//                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'corretor',
                                    //'rules' => 'trim|xss_clean'
                                 ),
                                array(
                                    'field'=>'item_id',
                                    'label'=>'imoveis',
                                    //'rules' => 'trim|xss_clean'
                                 ))
        ,
    
    
     
                'aluguel' => array(
                                array(

                                    'field' => 'dataAluguel',
                                    'label' => 'Data do Aluguel',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'locador',
                                   'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'locatario_id',
                                    'label'=>'locatario',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'corretor',
                                    'rules' => 'trim|xss_clean'
                                 ),
                                /*array(
                                    'field'=>'parcela',
                                    'label'=>'Parcela Mensal',
                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'diaPagamento',
                                    'label'=>'Dia para Pagamento',
                                    'rules' => 'trim|xss_clean'
                                 ),*/
                                array(
                                    'field'=>'item_id',
                                    'label'=>'imoveis',
                                    'rules' => 'trim|xss_clean'
                                 )
                    /*,
                    array(
                                    'field'=>'valorCaucao',
                                    'label'=>'valorCaucao',
                                    
                                 )
                    ,
                                array(
                                    'field'=>'prazoAluguel',
                                    'label'=>'Prazo da locação',
                                    'rules' => 'trim|xss_clean'
                                 )*/
        ) ,
                
                
                'imoveis' => array(array(
                                    'field' => 'TIPOIMOVEL',
                                    'label' => 'Tipo Imóvel',
                                    'rules' => 'trim|xss_clean|required'
                                ),
                    array(
                                    'field' => 'STATUSIMOVEL',
                                    'label' => 'Status Imóvel',
                                    'rules' => 'trim|xss_clean'
                                ))
    ,
                    array(
                                    'field' => 'ENDERECOIMOVEL',
                                    'label' => 'Endereco',
                                    'rules' => 'trim|xss_clean'
                                )
    ,
                    array(
                                    'field' => 'COMPENDIMOVEL',
                                    'label' => 'Complemento',
                                    'rules' => 'trim|xss_clean|required'
                                )
    ,
                    array(
                                    'field' => 'CIDADEIMOVEL',
                                    'label' => 'Cidade',
                                    'rules' => 'trim|xss_clean'
                                )
    ,
                    array(
                                    'field' => 'UFIMOVEL',
                                    'label' => 'Uf',
                                    'rules' => 'trim|xss_clean'
                                )
    ,
                    array(
                                    'field' => 'CEPIMOVEL',
                                    'label' => 'Cep',
                                    'rules' => 'trim|xss_clean|required'
                                )
    ,
                    array(
                                    'field' => 'DESCRICAOIMOVEL',
                                    'label' => 'Descricao',
                                    'rules' => 'trim|xss_clean'
                                )
    ,
                    array(
                                    'field' => 'NATUREZAIMOVEL',
                                    'label' => 'Natureza',
                                    'rules' => 'trim|xss_clean'
                                )
       ,
                    array(
                                    'field' => 'INTERESSEIMOVEL',
                                    'label' => 'Interesse',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'SITUACAOIMOVEL',
                                    'label' => 'Situação',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'PRECOVENDAIMOVEL',
                                    'label' => 'Preço venda',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'PRECOLOCACAOIMOVEL',
                                    'label' => 'Preço alugel',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'AREAUTILIMOVEL',
                                    'label' => 'Area util',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'AREACONSTIMOVEL',
                                    'label' => 'Area Construida',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'QTDEDORMITORIOIMOVEL',
                                    'label' => 'Dormitorios',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'VALORCONDIMOVEL',
                                    'label' => 'Valor condominio',
                                    'rules' => 'trim|xss_clean'
                                )   ,
                    array(
                                    'field' => 'VAGASGARIMOVEL',
                                    'label' => 'Vagas na garagem',
                                    'rules' => 'trim|xss_clean'
                                ),
    
                    'agenda' => array(array(

                                    'field' => 'dataAgenda',
                                    'label' => 'Data da compromisso',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'nomeClienteAgenda',
                                    'label'=>'clientes',
                                    'rules'=>'trim|xss_clean|required'
                                ),
								
								array(
                                    'field'=>'interesseCliente',
                                    'label'=>'interesseCliente',
                                    'rules'=>'trim|xss_clean|required'
                                ),
								
								array(
                                    'field'=>'statusAgenda',
                                    'label'=>'statusAgenda',
                                    'rules'=>'trim|xss_clean|required'
                                ),
								
								array(
                                    'field'=>'usuarios_id',
                                    'label'=>'corretor',
                                    //'rules' => 'trim|xss_clean'
                                 ),
								
                                array(
                                    'field'=>'telefoneCliente',
                                    'label'=>'telefoneCliente',
                                    'rules'=>'trim|xss_clean|required'
                                )
        ),

                    'negociacao' => array(
                    
                                array(

                                    'field' => 'dataNego',
                                    'label' => 'Data da negocição',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'fgts',
                                    'label' => 'FGTS',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'comprador',
                                    'label' => 'Comprador',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'etapa',
                                    'label' => 'Etapa',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(

                                    'field' => 'entrada',
                                    'label' => 'Valor de Entrada',
                                    'rules' => 'required|trim|xss_clean'
                                ),
                                array(
                                    'field'=>'clientes_id',
                                    'label'=>'comprador',
                                   // 'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'vendedor_id',
                                    'label'=>'vendedor',
//                                    'rules'=>'trim|xss_clean|required'
                                ),
                                array(
                                    'field'=>'usuarios_id',
                                    'label'=>'corretor',
                                    //'rules' => 'trim|xss_clean'
                                 ),
                                array(
                                    'field'=>'CODIMOVEL',
                                    'label'=>'imoveis',
                                    //'rules' => 'trim|xss_clean'
                                 ))             
                
                )
                ;
               
@extends('layouthome')

    
@section('link')
    <!-- resposanvel por metodo wizard -->
    <link href="<?php echo asset('css/plugins/steps/jquery.steps.css')?>" rel="stylesheet">
    <!-- date picker -->
    <link href="<?php echo asset('css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">
    <!-- jasny -  mascara -->
    <link href="<?php echo asset('css/plugins/jasny/jasny-bootstrap.min.css')?>" rel="stylesheet">
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">    
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
@endsection
            
@section('conteudo')
    <div class="row border-bottom">
    <!-- envelope do Conteúdo das views     -->
        <div class="wrapper wrapper-content animated fadeInRight">
        
                <div class="ibox-content m-b-lg">
                        <h2>
                            Cadastro de Pessoas
                        </h2>
                        
                        <!-- formulario de cadastro método Wizard -->
                        <form id="form-cadastro" method="POST" class="wizard-big">
                            @csrf
                            <h1>Informações Básicas</h1>
                            <!-- dados básico -->
                            <fieldset>
                                <h3 class="font-bold text-uppercase text-center">Informações cadastrais</h3>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="label-control" for="cpf_cadastro">CPF/CNPJ</label>
                                            <input type="text" placeholder="Ex. 99.999.999-99" class="form-control cpfCnpj" id="cpf_cadastro" name="cpf" minlength="14" required >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="label-control" for="tipoPessoa_cadastro">Tipo Pessoa</label>
                                                <select class="form-control m-b" id="tipoPessoa_cadastro" name="tipo_documento"   disabled>
                                                    <option value="">Tipo de Documento</option>
                                                    <option value="1">Pessoa Fisíca</option>
                                                    <option value="2">Pessoa Juridíca</option>
                                                </select> 
                                            </div>
                                        </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group" required>
                                            <label class="label-control" for="nome_cadastro">Nome/Razão Social</label>
                                            <input type="text" placeholder="Ex. João da Silva" class="form-control " id="nome_cadastro" name="nome" required >
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group" id="data_1">
                                            <label class="label-control" for="dt_nascimento">Nascimento/Abertura</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" id="nascimento_cadastro" name="nascimento" value="01/01/1900" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group" id="genero">
                                            <label class="label-control" for="sexo_cadastro">Gênero</label>
                                            <select class="form-control m-b"name="genero" id="sexo_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Feminino</option>
                                                <option value="3">Indefinido</option>
                                            </select>
                                        </div>
                                        <div class="form-group hide" id="porte">
                                                <label class="label-control" for="porte_cadastro">Porte</label>
                                                <select class="form-control m-b"name="porte_cadastro" id="porte_cadastro" required>
                                                    <option value="">Selecione</option>
                                                    <option value="1">MEI</option>
                                                    <option value="2">Microempresa</option>
                                                    <option value="3">Pequena</option>
                                                    <option value="4">Médio</option>
                                                    <option value="5">Grande</option>
                                                </select>                                        
                                            </div>
                                    </div>
                                </div>
                            </fieldset> <!-- FIM - dados básico -->

                            <!-- Dados de contato -->
                            <h1>Informações de Contato</h1>
                            <fieldset>
                                <h3 class="font-bold text-uppercase text-center">Endereço</h3>
                                <div class="row m-b-sm">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="endereco_cadastro" class="label-control">Logradouro</label>
                                            <input type="text" placeholder="Ex. Rua: Joao da Silva" id="endereco_cadastro" name="endereco" class="form-control" minlength="5" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="numero_cadastro" class="label-control">Número</label>
                                            <input type="text" placeholder="Ex. S/N" id="numero_cadastro" name="numero_cadastro" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="complemento_cadastro" class="label-control">Complemento</label>
                                            <input type="text" id="complemento_cadastro" placeholder="Ex. Ap 10" class="form-control" name="complemento_cadastro">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bairro_cadastro" class="label-control">Bairro</label>
                                            <input type="text" id="bairro_cadastro" name="bairro" placeholder="Ex. Centro" class="form-control" minlength="3" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="cidade_cadastro" class="label-control">Cidade</label>
                                            <input type="text" id="cidade_cadastro" name="cidade" placeholder="Ex. São Paulo" class="form-control" required>
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="cep_cadastro" class="label-control">CEP</label>
                                            <input type="text" id="cep_cadastro" data-mask="99999-999" placeholder="Ex. 00000-000" class="form-control" minlength="9" maxlength="9" name="cep" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="uf_cadastro" class="label-control">UF</label>
                                            <select class="form-control  m-b " id="uf_cadastro" name="uf"required >
                                                <option value="">Escolha</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                                <option value="EX">Estrangeiro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <h3 class="font-bold text-uppercase text-center">Telefone</h3>
                                <div class="row m-b-sm ">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefone1_cadastro">Telefone 1</label>
                                            <input type="text" placeholder="Ex. (11) 9999-9999" class="form-control celphones" id="telefone1_cadastro" name="fone1" minlength="14">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefone2_cadastro">Telefone 2</label>
                                            <input type="text" placeholder="Ex. (11) 9999-9999" class="form-control celphones" id="telefone2_cadastro" name="telefone2_cadastro">
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <h3 class="font-bold text-uppercase text-center">Email</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email_cadastro">Email</label>
                                            <input type="email" placeholder="Ex. email@site.com" class="form-control"  id="email_cadastro" name="email" required>
                                        </div>
                                    </div>
                                </div>
                            </fieldset><!-- FIM - dados de contato -->

                            <h1>Informações de Acessos</h1>
                            <fieldset>
                                <div class="row m-b-md">
                                    <h3 class="font-bold text-uppercase text-center m-b-md">Permissões de acesso</h3>
                                    <div class="col-sm-4">
                                        
                                        <label for="aluno_cadastro">Aluno</label>
                                        <input type="checkbox" id="aluno_cadastro" name="aluno_cadastro" class="js-switch" checked />
                                        
                                    </div> 

                                    <div class="col-sm-4">
                                        <label for="colaborador_cadastro">Colaborador</label>
                                        <input type="checkbox" id="colaborador_cadastro" name="colaborador_cadastro" class="js-switch_2"/>
                                        
                                    </div> 

                                    <div class="col-sm-4">
                                        <label for="doador_cadastro">Doador</label>
                                        <input type="checkbox" id="doador_cadastro" name="doador_cadastro" class="js-switch_3" checked />
                                        
                                    </div> 

                                </div>
                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Participação em Cursos</h3>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="modalidade_cadastro">Modalidade</label>
                                            <select class="form-control m-b"name="modalidade_cadastro" id="modalidade_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Arte Marcial</option>
                                                <option value="2">Artesanato</option>
                                                <option value="3">Teatro</option>
                                                <option value="4">Música</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="curso_cadastro">Curso</label>
                                            <select class="form-control m-b"name="curso_cadastro" id="curso_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Capoeira</option>
                                            </select>                                                   
                                        </div>
                                    </div>
                                    

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="label-control" for="graduacao_cadastro">Graduação</label>
                                            <select class="form-control m-b"name="graduacao_cadastro" id="graduacao_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Iniciante</option>
                                                <option value="1">Cordão Verde</option>
                                                <option value="1">Cordão Verde-amarelo</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="text-center m-b-md m-t-sm">
                                            <button class="btn btn-sm btn-primary" type="button" value="Adicionar">Adicionar</button>
                                        </div>
                                    </div>


                                    <!-- tabela de cursos que o individuo pertence -->
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover lista_cadastros" >
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Modalidade</th>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">Graduação/Nível</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="gradeX">
                                                        <td>Artes Marciais</td>
                                                        <td>
                                                            Capoeira
                                                        </td>
                                                        <td>
                                                            Cardão verde
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--Fim da tabela-->  
                                </div>
                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Cargo</h3>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="label-control" for="departamento_cadastro">Departamento</label>
                                            <select class="form-control m-b"name="departamento_cadastro" id="departamento_cadastro" required>
                                                <option value="">Selecione</option>
                                                <option value="1">Geral</option>
                                                <option value="2">Recepção</option>
                                                <option value="3">Tesouraria/ Financeiro</option>
                                                <option value="4">Aula</option>
                                                <option value="5">Diretoria</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="label-control" for="cargo_cadastro">Cargo</label>
                                            <select class="form-control m-b"name="cargo_cadastro" id="cargo_cadastro" required>
                                                <option value="1">Ajudante Geral</option>
                                                <option value="2">Recepcionista</option>
                                                <option value="3">Tesoureiro</option>
                                                <option value="4">Professor</option>
                                                <option value="5">Diretor</option>
                                            </select>                                                   
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="text-center m-b-md m-t-sm">
                                            <button class="btn btn-sm btn-primary" type="button" value="Adicionar">Adicionar</button>
                                        </div>
                                    </div>


                                    <!-- tabela de cursos que o individuo pertence -->
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover lista_cadastros" >
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Modalidade</th>
                                                        <th class="text-center">Curso</th>
                                                        <th class="text-center">Graduação/Nível</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="gradeX">
                                                        <td>Artes Marciais</td>
                                                        <td>
                                                            Capoeira
                                                        </td>
                                                        <td>
                                                            Cardão verde
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!--Fim da tabela-->  
                                </div>
                                <div class="row">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Usúario de acesso</h3>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="emailUser_cadastro">Email</label>
                                            <input type="email" placeholder="Ex. email@site.com" class="form-control"  id="emailUser_cadastro" name="emailUser_cadastro" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="senha_cadastro">Senha</label>
                                            <input type="password" placeholder="Cadastre uma senha" class="form-control"  id="senha_cadastro" name="senha_cadastro" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="confSenha_cadastro">Confirma Senha</label>
                                            <input type="password" placeholder="Confirme sua senha" class="form-control"  id="confSenha_cadastro" name="confSenha_cadastro" required>
                                        </div>
                                    </div> 

                                </div>
                            </fieldset>
                            
                            
                            <h1>Finalizar </h1>
                            
                            
                            <fieldset>
                                <h2>Termos e Condições</h2>
                                <!-- <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> 
                                <label for="acceptTerms">Salvar informações.</label> -->
                                
                            </fieldset>
                            
                        </form>
                    </div>


            <!-- ESPAÇO CONTEUDO DA PAGINA -->
        </div>
    </div> <!-- FIM - envelope do Conteúdo das views     -->
@endsection

@section('scripts')
    <!-- Switchery -->
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <!-- Steps -->
    <script src="<?php echo asset('js/plugins/staps/jquery.steps.min.js')?>"></script>
    <!-- swicth chery -->
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <!-- data table -->
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
    <!-- Jquery Validate -->
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/pages/cadastro.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
@endsection
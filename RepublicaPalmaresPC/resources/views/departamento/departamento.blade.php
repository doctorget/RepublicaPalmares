@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
@endsection

@section('conteudo')
    <div class="row border-bottom">
        <!-- envelope do Conteúdo das views     -->
            <div class="wrapper wrapper-content animated fadeInRight">
                
                <!-- ESPAÇO CONTEUDO DA PAGINA -->
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="ibox-content">
                                    

                                <div class="row">
                                    
                                    <div class="col-sm-12 m-b-lg">
                                            <h2 class="text-uppercase text-center">
                                                Cadastrar cargo/departamento
                                            </h2>
                                        </div>
                                    <form action="#" id="cadastrar_cargo">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="dpto_colab" class="label-control">Departamento</label>
                                                <div class="input-group">
                                                    <select data-placeholder="Selecione a Departamento..." id="dpto_colab" name="dpto_colab" class="chosen-select form-control"  tabindex="1">
                                                        <option value="">Selecione..</option>
                                                        <option value="1">Recepção</option>
                                                        <option value="2">Aulas</option>
                                                        <option value="3">Financeiro</option>
                                                        <option value="4">Depto Geral</option>
                                                    </select>  
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-target="toltip" title="Adicionar Departamento">
                                                            <i class="fa fa-plus"></i>
                                                        </button> 
                                                    </span> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="label-control"for="nome_cargo">Nome cargo</label>
                                                <input type="text" class="form-control m-b"name="nome_cargo" id="nome_cargo" required/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="descricao_cargo">Descrição do cargo</label>
                                                <textarea name="descricao_cargo" class="form-control m-b" id="descricao_cargo" placeholder="Descreva o cargo" cols="30" rows="5" required></textarea>                                                  
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="observacao_cargo">Observação do cargo</label>
                                                <textarea name="observacao_cargo" class="form-control m-b" id="observacao_cargo" placeholder="Descreva o cargo" cols="30" rows="5" required></textarea>                                                  
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="text-center m-b-md m-t-sm">
                                                <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                                <button class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Salvar</button>
                                            </div>
                                        </div>

                                    </form>
                                    
                                </div>
                            </div> <!--Fim de inserir novo registro-->
                        </div>
                    </div>
                </div>
                
            </div>
        </div> <!-- FIM - envelope do Conteúdo das views     --> 
        
        
        <div class="modal inmodal in" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <p class="modal-title">Incluir departamento</p>
                        </div>
                        <form action="#">
                            <div class="modal-body">
                            
                                <div class="form-group">
                                    <label class="label-control"for="nome_Depto">Nome Departamento</label>
                                    <input type="text" class="form-control m-b"name="nome_Depto" id="nome_Depto" required/>                     
                                </div>
        
                                <div class="form-group">
                                    <label class="label-control" for="descricao_depto">Descrição da Departamento</label>
                                    <textarea name="descricao_depto" class="form-control m-b" id="descricao_depto" placeholder="Descreva o departamento" cols="30" rows="3" ></textarea> 
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_Colab').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Lista de cadastro'},
                    {extend: 'pdf', title: 'Lista de cadastro'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '14px');
                            $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                        }
                    }
                ],
                searching: true,
                ordering: true,
                info: false,
                pageLength: 20,
                lengthChange: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [2, 6],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 25 ?
                            data.substr(0, 25) + '…' :
                            data;
                    },
                }],
            });
        });
        
    </script>
@endsection
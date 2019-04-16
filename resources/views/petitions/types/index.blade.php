@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div id="list_types" class="row justify-content-center">
<div class="card strpied-tabled-with-hover table-full-width table-responsive">       
        <div class="card-header ">
            <h4 class="card-title">TIPOS
                    <a href="types/create" class="btn btn-primary float-right">Novo&nbsp;<i class="fa fa-plus"></i></a>
            </h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Endereçamento</th>
                    <th>Seção</th>
                    <th>Núm Processo</th>
                    <th>Autor</th>
                    <th>Réu</th>
                    <th>Nome Ação</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
                <tbody>
                    <tr  v-for="item in types">                       
                        <td>@{{ item.title}}</td>
                        <td>@{{ item.header_address}}</td>                       
                        <td>@{{ item.title_section}}</td>
                        <td>@{{ item.header_num_process}}</td>
                        <td>@{{ item.header_author}}</td>
                        <td>@{{ item.header_culprit}}</td>
                        <td>@{{ item.header_name_action}}</td>  
                        <td>
                            <input   :checked="item.active"  data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>                           
                            <a rel="tooltip"  type="button" class="btn btn-primary" :href="'types/'+item.id+'/edit'" data-original-title="Editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" type="button"  class="btn btn-danger " data-toggle="modal"v-on:click="alertDelete" href="#" data-original-title="Eliminar">
                                <i class="fa fa-remove">
                                </i>                              
                            </a> 
                            <div class="modal fade" id="alertDelete"   tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content col-md-8">
                                            <div class="modal-header ">
                                                    <h4>Deletar <strong>@{{item.id}} </strong>?</h4> 
                                                    <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                    </button>                                                    
                                            </div>                                         
                                            <div class="modal-footer">
                                                <a rel="tooltip" type="button"  v-on:click.prevent.stop="deleteTypes(item)" class="btn btn-danger" href="#">
                                                    Confirmar ?
                                                </a> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>                       
                        </td>                        
                    </tr>                                             
                </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection


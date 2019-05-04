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
                    <th>Nome Ação</th>                   
                    <th>Núm Processo</th>
                    <th>Autor</th>
                    <th>Réu</th>
                    <th>Seções</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
                <tbody>
                    <tr  v-for="item in types">                       
                        <td>@{{ item.title}}</td>
                        <td>@{{ item.header_address}}</td>                        
                        <td>@{{ item.header_num_process}}</td>
                        <td>@{{ item.header_author}}</td>
                        <td>@{{ item.header_culprit}}</td>
                        <td>@{{ item.header_name_action}}</td>  
                        <td> 
                            <span class="badge badge-success" v-for="data_section in item.sections">
                                &nbsp;  @{{ data_section.title_section }} 
                            </span>
                        </td>
                        <td>
                            <input :checked="item.active" v-on:change="btnActive(item)"  data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>                           
                            <a rel="tooltip"  type="button" class="btn btn-primary" :href="'types/'+item.id+'/edit'" data-original-title="Editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" type="button"  class="btn btn-danger "  v-on:click.prevent="getDestroy(item)" href="#" data-original-title="Eliminar">
                                <i class="fa fa-remove">
                                </i>                              
                            </a>                                   
                        </td>                        
                    </tr>                                             
                </tbody>
            </table>
            @include('petitions/types/modalDelete')
        </div>
    </div>
</div> 
@endsection
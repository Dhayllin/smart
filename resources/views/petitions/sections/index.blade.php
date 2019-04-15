@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div id="list_sections" class="row justify-content-center">
       
<div class="card strpied-tabled-with-hover col-md-10 ">   
        
        <div class="card-header ">
            <h4 class="card-title">SEÇÕES                        
                <a href="sections/create" class="btn btn-primary float-right">Novo&nbsp;<i class="fa fa-plus"></i></a>
            </h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
                <tbody>
                    <tr  v-for="item in sections">                       
                        <td>@{{ item.title}}</td>
                        <td>@{{ item.description}}</td>
                        <td>
                                <input   :checked="item.active" data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>                           
                            <a rel="tooltip" tytpe="button" class="btn btn-primary " :href="'sections/'+item.id+'/edit'" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" type="button" class="btn btn-danger " data-toggle="modal" data-target="#alertDelete" href="#" data-original-title="Eliminar">
                                <i class="fa fa-remove">
                                </i>
                            </a> 
                            <div class="modal fade" id="alertDelete" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content col-md-8">
                                                <div class="modal-header ">
                                                        <h4>Deletar tipo ?</h4> 
                                                        <button type="button" class="close" data-dismiss="modal">
                                                                <span>&times;</span>
                                                        </button>                                                    
                                                </div>
                                                 <div class=" modal-body"> 
                                                    Seção : <strong>@{{item.title}} </strong>
                                                 </div>
                                         
                                            <div class="modal-footer">
                                                <a rel="tooltip" type="button"   class="btn btn-danger"  v-on:click="deleteTypes(item)" href="#">
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

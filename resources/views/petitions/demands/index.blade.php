@extends('layouts.app')

@section('content')
<div id="list_demands" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">       
        <div class="card-header ">
            <h4 class="card-title">PEDIDOS
                <a href="demands/create" class="btn btn-primary float-right">Novo&nbsp;<i class="fa fa-plus"></i></a>
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
                    <tr  v-for="item in demands">                       
                        <td>@{{ item.title}}</td>
                        <td>@{{ item.content}}</td>
                        <td>
                            <input   :checked="item.active" data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>                           
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" :href="'demands/'+item.id+'/edit'" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" v-on:click.prevent.stop="deleteDemands(item)" data-original-title="Eliminar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>                       
                    </tr>                                             
                </tbody>
            </table>
        </div>
    </div> 
</div>   
@endsection

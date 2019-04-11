@extends('layouts.app')

@section('content')
<div id="list_types" class="row justify-content-center">
<div class="card strpied-tabled-with-hover table-full-width table-responsive">       
        <div class="card-header ">
            <h4 class="card-title">TIPOS</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Cabeçalho</th>
                    <th>Seção</th>
                    <th>Número Processo</th>
                    <th>Autor</th>
                    <th>Réu</th>
                    <th>Nome da Ação</th>
                    <th>Status</th>
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
                            <input   checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " href="@{{ item.id }}" data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="@{{ item.id }}" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="@{{ item.id }}" data-original-title="Remove">
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


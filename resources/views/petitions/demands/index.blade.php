@extends('layouts.app')

@section('content')
<div id="list_demands" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">       
        <div class="card-header ">
            <h4 class="card-title">PEDIDOS</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
                <tbody>
                    <tr  v-for="item in demands">                       
                        <td>@{{ item.title}}</td>
                        <td>@{{ item.content}}</td>
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

@extends('layouts.app')
@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div id="list_demands" class="row justify-content-center">         
<div class="card strpied-tabled-with-hover col-md-10 ">  
        
        <div class="card-header ">
            <h4 class="card-title">Criar Pedido
                <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-primary float-right">Fechar</button>
            </h4>
        </div>
        <form action="{{ route('demands.update',$item->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            @csrf
        <div class="card-body ">
            @csrf
            <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" value="{{$item->title}}">
                    </div>
                </div>           
            </div>   
            <div class="row">
                <label for="content" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="content"  type="text" value="{{$item->content}}">
                    </div>
                </div>            
            </div>
            <div class="row">
                <label for="active" class="col-sm-3 col-form-label">Ativo:</label>
                <div class="form-group">
                    <input  name="active" checked="" data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-success float-right">&nbsp;Salvar&nbsp;</button>
        </div>
        </div>
    </div>
</div>
@endsection
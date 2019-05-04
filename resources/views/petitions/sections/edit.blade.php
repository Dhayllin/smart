@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div class="row justify-content-center">         
<div class="card strpied-tabled-with-hover col-md-10 ">  
        
        <div class="card-header ">
            <h4 class="card-title">Editar Seção
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-primary float-right"> Fechar</button> 
            </h4>
        </div>
        <form action="{{ route('sections.update',$item->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
           @csrf
        <div class="card-body ">       
            <div class="row">
                <label for="title_section" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('title_section') ? 'has-error' : '' }}">
                        <input class="form-control" name="title_section" type="text" value="{{ $item->title_section') }}">
                        <span class="#"></span>
                        @if ($errors->has('title_section'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_section') }}</strong> 
                            </span>
                        @endif
                    </div>
                </div>           
            </div>  
            <div class="row">
                <label for="description" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <input class="form-control" name="description"  type="text" value="{{ $item->description }}">
                        <span class="#"></span>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
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
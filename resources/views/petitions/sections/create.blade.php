@extends('layouts.app')

@section('content')
<div id="list_sections" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">  
        <div class="card-header ">
            <h4 class="card-title">Criar Pedido
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> Voltar</button> 
            </h4>
        </div>
        <form action="{{ route('sections.store') }}" method="post">
           
        <div class="card-body ">
            @csrf
            <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input class="form-control" name="title" type="text">
                        <span class="#"></span>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>           
            </div> 
            <div class="row">
                <label for="description" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('description') ? 'has-error' : '' }}">
                        <input class="form-control" name="description"  type="text">
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
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        </div>
    </div>
</div>
@endsection
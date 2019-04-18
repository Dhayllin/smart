@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div id="list_demands" class="row justify-content-center">         
<div class="card strpied-tabled-with-hover col-md-10 ">  
        
        <div class="card-header ">
            <h4 class="card-title">Criar Pedido
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-success float-right"><i class="fa fa-arrow-left"></i> Voltar</button> 
            </h4>
        </div>
        <form action="{{ route('demands.store') }}" method="post">
           @csrf
        <div class="card-body ">
            @csrf
            <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input class="form-control" name="title" type="text"  value="{{ old('title') }}">
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
                <label for="content" class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('content') ? 'has-error' : '' }}">
                        <textarea class="form-control" name="content" rows="30" cols="1000" type="text"  value="{{ old('content') }}"> </textarea>
                        <span class="#"></span>
                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
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
@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">  
        <div class="card-header ">
            <h4 class="card-title">Criar Seção
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> Voltar</button> 
            </h4>
        </div>        
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error}} </li>
                        @endforeach 
                    </ul>
                </div>                       
               @endif   
        <form action="{{ route('sections.store') }}" method="post">
           
        <div class="card-body ">
            @csrf
            <div class="row">
                <label for="title_section" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group has-feedback {{ $errors->has('title_section') ? 'has-error' : '' }}">
                        <input class="form-control" name="title_section" type="text" value="{{ old('title_section') }}">
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
                        <input class="form-control" name="description"  type="text" value="{{ old('description') }}">
                        <span class="#"></span>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>            
            </div>
            <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        
        </div>
    </div>
</div>
@endsection
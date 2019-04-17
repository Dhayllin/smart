@extends('layouts.app')

@section('content')
@if(Session::has('erro'))
<div class="alert alert-danger">{{ Session::get('erro')}}</div>
@endif
<div id="list_demands" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">  
        <div class="card-header ">
            <h4 class="card-title">Criar Tipo Petição
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-success float-right"><i class="fa fa-arrow-left"></i> Voltar</button> 
            </h4>
        </div>
        <form action="{{ route('types.store') }}" method="post">
                @csrf
        <div class="card-body ">
            <div class="row">
                <div class="col">
                <label for="title">Título:</label>               
                    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input class="form-control" name="title" type="text" value="{{ old('title') }}">
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
            <div class="col-md-4">             
            <label for="header_address">Endereçamento: </label>
            <div class="form-group has-feedback {{ $errors->has('header_address') ? 'has-error' : '' }}">
                <select tabindex="-98" name="header_address" value="{{ old('header_address') }}"data-original-index="26"class="selectpicker">
                    <option value="">Selecione</option>
                    <option value="IV">Identificar a vara</option>
                    <option value="NV">Não Identificar a vara</option>
                </select>  
                <span class="#"></span>
                @if ($errors->has('header_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('header_address') }}</strong>
                    </span>
                @endif
            </div>           
            </div>
            <div class="col-md-4">             
                    <label for="header_culprit">Réu: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_culprit') ? 'has-error' : '' }}">
                        <select tabindex="-98" name="header_culprit" value="{{ old('header_culprit') }}" data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="QC">Qualificação completa</option>
                            <option value="JQ">Já qualificado</option>
                        </select> 
                        <span class="#"></span>
                        @if ($errors->has('header_culprit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('header_culprit') }}</strong>
                            </span>
                        @endif 
                    </div>           
                </div>
                <div class="col-md-4">             
                    <label for="header_num_process">Núm Processo: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_num_process') ? 'has-error' : '' }}">
                        <select tabindex="-98" name="header_num_process" value="{{ old('header_num_process') }}" data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="S">Sim</option>
                            <option value="N">Não</option>
                        </select> 
                         <span class="#"></span>
                        @if ($errors->has('header_num_process'))
                            <span class="help-block">
                                <strong>{{ $errors->first('header_num_process') }}</strong>
                            </span>
                        @endif 
                    </div>           
                    </div> 
            </div>
            <div class="row">              
                <div class="col-md-4">             
                <label for="header_name_action">Nome Ação: </label>
                <div class="form-group has-feedback {{ $errors->has('header_name_action') ? 'has-error' : '' }}">
                    <select tabindex="-98" name="header_name_action"  value="{{ old('header_name_action') }}" data-original-index="26"class="selectpicker">
                        <option value="">Selecione</option>
                        <option value="LB">Linha de baixo</option>
                        <option value="ML">Mesma linha</option>
                    </select>  
                    <span class="#"></span>
                    @if ($errors->has('header_name_action'))
                        <span class="help-block">
                            <strong>{{ $errors->first('header_name_action') }}</strong>
                        </span>
                    @endif
                </div>           
            </div>  
            <div class="col-md-4">             
                    <label for="header_name_action">Autor: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_name_action') ? 'has-error' : '' }}">
                        <select tabindex="-98"  name="header_author"  value="{{ old('header_name_action') }}" data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="QC">Qualificação completa</option>
                            <option value="JQ">Já qualificado</option>
                        </select>  
                        <span class="#"></span>
                        @if ($errors->has('header_name_action'))
                            <span class="help-block">
                                <strong>{{ $errors->first('header_name_action') }}</strong>
                            </span>
                        @endif
                    </div>           
                </div> 
        </div>
        
        <div class="row">
            <div class="col">
                <label for="section_ids">Seções</label>  
                <div class="col">                         
                    @foreach ($itens as $item)
                    <div class="form-check checkbox-inline">
                        <label class="form-check-label">
                        <input id="section_ids" name="section_ids[]"class="form-check-input" value="{{$item->id}}" type="checkbox">
                            <span class="form-check-sign"></span>
                            {{$item->title_section}}
                        </label>
                    </div>                            
                    @endforeach 
                </div>                          
            </div>                               
        </div>        
    </div>
    <div class="card-footer text-center">
        <button type="submit" class="btn btn-success float-right">&nbsp;Salvar&nbsp;</button>
    </div>
</form>
</div>
</div>
@endsection
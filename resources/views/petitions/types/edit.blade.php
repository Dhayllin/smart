@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div  class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">  
        <div class="card-header ">
            <h4 class="card-title">Editar Tipo Petição
                    <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-primary float-right"><i class="fa fa-arrow-left"></i> Voltar</button> 
            </h4>
        </div>
        <form action="{{ route('types.update',$item->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            @csrf
        <div class="card-body ">
            <div class="row">
                <div class="col">
                <label for="title">Título:</label>               
                    <div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
                        <input class="form-control" name="title" type="text" value="{{$item->title}}">
                         <span class="#"></span>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>                   
                </div>              
                <div class="col">
                    <label for="active">Ativo:</label>
                    <div class="form-group has-feedback {{ $errors->has('razao_social') ? 'has-error' : '' }}">
                        <input   checked="" name="active"data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                    </div>
                </div>          
            </div>  
            <div class="row">  
                <div class="col-md-4">             
                <label for="petition_section_id">Seções: </label>
                <div class="form-group has-feedback {{ $errors->has('petition_section_id') ? 'has-error' : '' }}">
                <select tabindex="-98" name="petition_section_id" data-original-index="26"class="selectpicker">
                    <option value="">Selecione</option>
                    @foreach ($sections as $section)
                    <option value="{{$section->id}}" 
                         @if($item->petition_section_id == $section->id && Request::is('*/edit'))
                            {{'selected'}}
                        @endif>
                        {{$section->title}}
                    </option>
                    @endforeach               
                </select>    
                <span class="#"></span>
                @if ($errors->has('petition_section_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('petition_section_id') }}</strong>
                    </span>
                @endif                      
            </div> 
            </div>    
            <div class="col-md-4">             
            <label for="header_address">Endereçamento: </label>
            <div class="form-group has-feedback {{ $errors->has('header_address') ? 'has-error' : '' }}">
                <select tabindex="-98" name="header_address" data-original-index="26"class="selectpicker">
                    <option value="">Selecione</option>
                    <option value="Identificar a vara" @if( $item->header_address == "Identificar a vara" && Request::is('*/edit'))
                                     
                    @endif>   
                    Identificar a vara                                      
                   </option>
                    <option value="Não Identificar a vara"  @if ( $item->header_address == "Identificar a vara" && Request::is('*/edit'))
                                
                    @endif>Não Identificar a vara</option>
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
                        <select tabindex="-98" name="header_culprit"  data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="Qualificação completa">Qualificação completa</option>
                            <option value="Já qualificado">Já qualificado</option>
                        </select> 
                        <span class="#"></span>
                        @if ($errors->has('header_culprit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('header_culprit') }}</strong>
                            </span>
                        @endif 
                    </div>           
                </div>
            </div>
            <div class="row">  
                    <div class="col-md-4">             
                            <label for="header_num_process">Núm Processo: </label>
                            <div class="form-group has-feedback {{ $errors->has('header_num_process') ? 'has-error' : '' }}">
                                <select tabindex="-98" name="header_num_process" data-original-index="26"class="selectpicker">
                                    <option value="">Selecione</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select> 
                                 <span class="#"></span>
                                @if ($errors->has('header_num_process'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('header_num_process') }}</strong>
                                    </span>
                                @endif 
                            </div>           
                            </div>                           
                <div class="col-md-4">             
                <label for="header_name_action">Nome Ação: </label>
                <div class="form-group has-feedback {{ $errors->has('header_name_action') ? 'has-error' : '' }}">
                    <select tabindex="-98" name="header_name_action" data-original-index="26"class="selectpicker">
                        <option value="">Selecione</option>
                        <option value="Linha de baixo">Linha de baixo</option>
                        <option value="Mesma linha">Mesma linha</option>
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
                        <select tabindex="-98"  name="header_author"data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="Qualificação completa">Qualificação completa</option>
                            <option value="Já qualificado">Já qualificado</option>
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
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>
</div>
</div>
@endsection
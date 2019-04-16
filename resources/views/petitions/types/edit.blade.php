@extends('layouts.app')

@section('content')
@if(Session::has('mensagem_sucesso'))
<div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
@endif
<div  class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-9">  
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
                    <input  checked="false" name="active"data-toggle="swtch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                    </div>
                </div>          
            </div>  
            <div class="row"> 
            <div class="col-md-3">             
            <label for="header_address">Endereçamento: </label>
            <div class="form-group has-feedback {{ $errors->has('header_address') ? 'has-error' : '' }}">
                <select tabindex="-98" name="header_address" data-original-index="26"class="selectpicker">
                    <option value="">Selecione</option>
                    <option value="IV" @if( $item->header_address == "IV")
                                    {{'selected'}} 
                    @endif>Identificar a vara</option>
                    <option value="NV"  @if ( $item->header_address == "NV")
                            {{'selected'}} 
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
            <div class="col-md-3">             
                    <label for="header_name_action">Nome Ação: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_name_action') ? 'has-error' : '' }}">
                        <select tabindex="-98" name="header_name_action" data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="LB" @if($item->header_name_action == "LB")
                                {{'selected'}}
                            @endif>Linha de baixo</option>
                            <option value="ML"@if($item->header_name_action == "ML")
                                    {{'selected'}}
                            @endif >Mesma linha</option>
                        </select>  
                        <span class="#"></span>
                        @if ($errors->has('header_name_action'))
                            <span class="help-block">
                                <strong>{{ $errors->first('header_name_action') }}</strong>
                            </span>
                        @endif
                    </div>           
                </div> 
       
                <div class="col-md-2">             
                    <label for="header_num_process">Núm Processo: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_num_process') ? 'has-error' : '' }}">
                        <select tabindex="-98" name="header_num_process" data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="S" @if($item->header_num_process == "S")
                                {{'selected'}}
                            @endif>Sim</option>
                            <option value="N" @if($item->header_num_process == "N")
                                    {{'selected'}} @endif>Não</option>
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
                    <label for="header_culprit">Réu: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_culprit') ? 'has-error' : '' }}">
                        <select tabindex="-98" name="header_culprit"  data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="QC" @if ($item->header_culprit == "QC")
                                {{'selected'}}
                            @endif>Qualificação completa</option>
                            <option value="JQ" @if ($item->header_culprit == "JQ")
                                {{'selected'}}
                            @endif>Já qualificado</option>
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
                    <label for="header_name_action">Autor: </label>
                    <div class="form-group has-feedback {{ $errors->has('header_name_action') ? 'has-error' : '' }}">
                        <select tabindex="-98"  name="header_author"data-original-index="26"class="selectpicker">
                            <option value="">Selecione</option>
                            <option value="QC" @if ($item->header_author == "QC")
                                {{'selected'}}
                            @endif>Qualificação completa</option>
                            <option value="JQ"  @if ($item->header_author == "JQ")
                                    {{'selected'}}
                                @endif>Já qualificado</option>
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
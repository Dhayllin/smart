@extends('layouts.app')

@section('content')
<div id="list_demands" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">  
        <div class="card-header ">
            <h4 class="card-title">Criar Seção</h4>
        </div>
        <div class="card-body ">
            <div class="row">
                <label class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="required" required="true" type="text">
                    </div>
                </div>           
            </div>          
            
            <div class="row">
                <label class="col-sm-2 col-form-label">Descrição:</label>
                <div class="col-sm-7">
                    <div class="form-group">
                        <input class="form-control" name="url" url="true" type="text">
                    </div>
                </div>            
            </div>
            <div class="row">
                <label class="col-sm-3 col-form-label">Status:</label>
                <div class="form-group">
                    <input   checked="" data-toggle="switch" data-on-color="primary" data-off-color="primary" data-on-text="" data-off-text="" type="checkbox">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">SEÇÕES</h4>
            <p class="card-category"></p>
        </div>
        <div class="card-body table-full-width table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr><th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                </tr></thead>
                <tbody>
                    <tr>                       
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>                        
                    </tr>
                    <tr>                       
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>                       
                    </tr>
                    <tr>                       
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>                       
                    </tr>
                    <tr>                      
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td> 
                    </tr>
                    <tr>                        
                        <td>Doris Greene</td>
                        <td>$63,542</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td> 
                    </tr>
                    <tr>                       
                        <td>Mason Porter</td>
                        <td>$78,615</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>                     
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
@endsection

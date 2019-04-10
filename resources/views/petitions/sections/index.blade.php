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
                    <th>Ações</th>
                </tr>
            </thead>
                <tbody>
                    <tr>                       
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                    </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                    </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>                        
                    </tr>
                    <tr>                       
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>                       
                    </tr>
                    <tr>                       
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>                       
                    </tr>
                    <tr>                      
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td> 
                    </tr>
                    <tr>                        
                        <td>Doris Greene</td>
                        <td>$63,542</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td> 
                    </tr>
                    <tr>                       
                        <td>Mason Porter</td>
                        <td>$78,615</td>
                        <td>
                            <input checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" type="checkbox">
                        </td>
                        <td>
                            <a rel="tooltip" class="btn btn-link btn-info " data-original-title="View">
                                <i class="fa fa-image">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-warning table-action edit" href="#" data-original-title="Edit">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a rel="tooltip" class="btn btn-link btn-danger table-action remove" href="#" data-original-title="Remove">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>                     
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
@endsection

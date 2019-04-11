@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            @{{ session('status') }}
                        </div>
                    @endif                    
                    <div id="list_sections" >
                           
                        @{{ title }}
                        <ul>
                            <div v-for="(item, index) in sections">@{{index}} -- 
                                @{{item.title}} 
                                @{{item.description}}        
                            </div>
                        </ul>
                          
                    </div>
                    <div id="appvue" >
                       
                        @{{ title }}
                        <ul>
                            <div v-for="(item, index) in linguagens">@{{index}} -- @{{item.nome}}        
                                </div>
                        </ul>
                        
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

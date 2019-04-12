@extends('layouts.app')

@section('content')
<div id="list_sections" class="row justify-content-center">
<div class="card strpied-tabled-with-hover col-md-10 ">       
        <div class="card-header ">
            <h4 class="card-title">SEÇÕES</h4>
            <p class="card-category"></p>
        </div>
<div class="box-body">
    <table id="example" class="table table-bordered table-striped">
      <thead>
        <tr>
            <th>id</th>  
            <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i></th>
            <th><i class="fa fa-trash" aria-hidden="true"></i></th>              
        </tr>
      </thead>
      <tbody>                 
      @foreach($sections as $item)
      <tr>
        <td>{{$item->id}}</td> 
      <td><a href="{{ route('sections.edit',$item->id)}}" data-toggle="tooltip" data-original-title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
      <td> <form action="{{ route('sections.destroy', $item->id) }}" method="POST"  data-toggle="tooltip" data-original-title="deletar" onsubmit="if(confirm('Deletar {{$item->id}}?')) { return true } else {return false }">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i></button>
            </form>
        </td>                          
      </tr>
      @endforeach
      </table>
    </div>
  </div>
  @endsection
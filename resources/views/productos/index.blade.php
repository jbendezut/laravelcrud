@extends('productos.layout')
@section('content')
<?php
$date=date('Y-m-d');
?>
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Registro de productos par ale almacen</h2>
            </div>
            <div class="float-end">
                <a href="{{route('productos.create')}}" class="btn btn-success">crear nuevo</a>
            </div>
        </div>
    </div>

    @if ($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-boardered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th width='280px'>Actions</th>
        </tr>
        @foreach ($data as $key=> $value) 
        <tr>
            <td>{{++$i}}</td>
            <td>{{$value->nombre}}</td>
            <td> {{ \Str::limit($value->descripcion, 100)}}</td>
            <td>{{$value->precio}}</td>
            <td>
                <form action="{{ route('productos.destroy',$value->id)}}" method="POST"> 
                  <a href="{{route('productos.show',$value->id)}}" class="btn btn-warning">Mostar</a>
                  <a href="{{route('productos.edit',$value->id)}}" class="btn btn-primary">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eleminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!!$data->links()!!}

@endsection
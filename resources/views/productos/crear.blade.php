@extends('productos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 " style="margin-top: 100px;">
        <div class="float-start ">
            <h2>Agreagar nuevo productot</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('productos.index') }}"> regresar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger ">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Enter nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Enter Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>precio:</strong>
                <input type="text" name="precio" class="form-control" placeholder="Enter precio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection
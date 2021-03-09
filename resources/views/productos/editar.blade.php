@extends('productos.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 " style="margin-top: 5rem;">
            <div class="float-start">
                <h2>Edit Product</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('productos.update',$producto->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Detail">{{ $producto->descripcion }}</textarea>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input type="text" name="precio" value="{{ $producto->precio }}" class="form-control" placeholder="precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </div>
   
    </form>
@endsection
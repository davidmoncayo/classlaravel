@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<div class="card">
          <div class="card-header">
            <h5>Agregar Productos</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-md-5 ">
                        <input type="text" class="form-control" placeholder="name" name="name" required autofocus/>
                    </div>
                    
                    <div class="col-xs-12 col-md-5 ml-auto">
                        <input type="number" class="form-control" placeholder="Cantidad en metros" name="cantidad" required autofocus/>
                    </div>
                    <div class="col-xs-12 col-md-5 ">
                        <input type="textarea" value="" placeholder="Descripcion Del Producto" class="form-control" name="descripcion" required autofocus/>
                    </div>
                    <div class="col-xs-12 col-md-5 ml-auto">
                        <input type="text" class="form-control" placeholder="Precio" name="precio" required autofocus />
                    </div>
                    
                    <div class="col-xs-12 col-md-5 ml-auto">
                        <input type="hidden" class="form-control"  name="activo" value="1"/>
                    </div>
                   <input type="file" id="ruta" name="ruta" required/>
                   
                   
                   
                   
                <div >
                    
                    <input type="hidden" name="user_pub" value="{{ $user = Auth::id() }}" />
                    
                </div>
                    <!--<div class="col-xs-12 col-md-5 ">
                        <input type="file" id="ruta" name="ruta"/>
                    </div>
                    -->
                </div>
        <div class="row">
                    <div class="col-xs-12 col-md-4">
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <br>
                        <button type="submit" class="btn btn-secondary w-50" name="rgt">Publicar</button>
                    </div>
                </div>
                </form>
               <!--SE AGREGO LA TABLA-->

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Document</title>
            </head>
            <body>

            
            
            
            
               <br>
                    <div class="table-responsive">
                <table class="table table-bordered table-striped">
                   <thead class="table-dark">
                       <tr>
                            <td>Nombre</td>
                            <td>Cantidad</td>
                            <td>Descripcion</td>
                            <td>Precio</td>
                            <td>Imagen</td>
                            <td>Editar</td>
                            <td>Borrar</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                           
                            
                               
                               
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->cantidad }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <td>{{ $product->precio }}</td>
                                <td><img width="100"  src="{{ Storage::url($product->ruta) }}" alt="First slide"></td>
                                
                                <td><a href="{{ action('productsController@edit', $product->id) }}"  class="btn btn-success" >Editar</a></td>
                               <td>
                        <form method="post" action="{{ action('productsController@destroy', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger">Delete</a>
                    </form>
        </td>
                                
                              
                                
                                
                            
                        <tr>
                            @endforeach
                    </tbody>
                </table>

            </div>
            
  @endsection      
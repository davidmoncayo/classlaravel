@extends('layouts.app')

@section('content')


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
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad" required autofocus/>
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
                        <button type="submit" class="btn btn-secondary w-50" name="">Registrar</button>
                    </div>
                </div>
               <!--SE AGREGO LA TABLA-->
               <br>
                    <div class="table-responsive">
                <table class="table table-bordered table-striped">
                   <thead class="table-dark">
                       <tr>
                            <td>Nombre</td>
                            <td>Descripcion</td>
                            
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Editar</td>
                            <td>Borrar</td>
                            <td>Publicar</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                           
                            <tr>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['cantidad'] }}</td>
                                <td>{{ $product['descripcion'] }}</td>
                                <td>{{ $product['precio'] }}</td>
                                
                                <td><a href=""  class="btn btn-success" >Editar</a></td>
                               <td><button type="button" id="borrar" class="btn btn-danger">Borrar</button></td>
                               
                                <?php
                                if( 1 == $product['activo'] ){
                                    ?>
                                    <td><a href=""  class="btn btn-primary" >Publicar</a></td>
                                    <?php
                                }else{
                                    ?>
                                    <td><button type="button" class="btn btn-primary" disable>Publicado</button></td>
                                    <?php
                                }
                                
                                ?>
                              
                                
                                
                            
                        <tr>
                            @endforeach
                    </tbody>
                </table>

            </div>
  @endsection      
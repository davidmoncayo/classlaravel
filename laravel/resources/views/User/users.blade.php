@extends('layouts.app')

@section('content')

<div class="container">
    
    
     
        <input type="hidden" name="_method" value="PUT"/>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?php 
                $user = Auth::id();
                $datos = DB::table('users')->select('*')->where('id','=',$user)->get(); 
                ?>
                @foreach($datos as $dato)
                
                <label>Rol de usuario</label>
                 <div class="form-group">
                                <select id="rol_user" type="text" class="form-control" name="rol_user"  disabled>
                                @if($dato->rol_user == 2)
                                <option value="2">Proveedor de tela</option>
                                @else
                                 <option value="3">Fabricante de ropa</option>
                                 @endif
                                </select>
                                
                </div>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control " id="Name" value="{{$dato->name}}"  name="Name"  disabled/>    
                </div>
                <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control " id="cantidad" value="{{$dato->lastname}}" name="cantidad"  disabled/>    
                </div>
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control "  id="descripcion" value="{{$dato->phone}}" name="descripcion"  disabled/>    
                </div>
            
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control " id="precio" value="{{$dato->address}}" name="precio" disabled/>    
                </div>
                <div class="form-group">
                    <label for="">Edad</label>
                    <input type="text" class="form-control " id="email" value="{{$dato->age}}" name="email"  disabled/>    
                </div>
                
            
            
                <div class="form-group">
                    <label for="">Genero</label>
                    <select class="form-control" name="genero" id="genero" disabled/>
                        <option value="M">Masculino</option>
                        <option  value="F">Femenino</option>
                    </select>
                </div>
                </div>
                <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="">Correo Electrónico</label>
                    <input type="text" class="form-control "  id="edad" value="{{$dato->email}}"  name="edad" disabled/>    
                </div>
                
            </div>
            <input id="estado_user" type="hidden" name="estado_user" value="1">
            
        </div>
        <div class="form-group">
                   
                    <a href="{{ action('userController@edit',$user) }}"  class="btn btn-primary" >Editar</a>
                </div>
    </form>
    @endforeach
</div>

@endsection
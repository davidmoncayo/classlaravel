@extends('layouts.app')

@section('content')

<div class="container">
    <form class="form" method="post" id="form" action="{{action('userController@update', $id)}}">
    @csrf
    
    <?php 
                $user = Auth::id();
                $datos = DB::table('users')->select('*')->where('id','=',$user)->get(); 
                ?>
                @foreach($datos as $dato)
                
                
                 <div class="form-group">
                                <select id="rol_user" type="text" class="form-control" name="rol_user">
                                @if($dato->rol_user == 2)
                                
                                
                                <option value="2">Proveedor de tela</option>
                                <option value="3">Fabricante de ropa</option>
                                @else
                                 <option value="3">Fabricante de ropa</option>
                                 <option value="2">Proveedor de tela</option>
                                 @endif
                                </select>
                                
                </div>
        <input type="hidden" name="_method" value="PUT"/>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" class="form-control " id="Name" value=""  name="name" placeholder="{{$dato->name}}"/>    
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" class="form-control " id="lastname" value="" name="lastname" placeholder="{{$dato->lastname}}"/>    
                </div>
                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control "  id="phone" value="" name="phone" placeholder="{{$dato->phone}}"/>    
                </div>
            
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control " id="address" value="" name="address" placeholder="{{$dato->address}}"/>    
                </div>
                <div class="form-group">
                    <label for="">Edad</label>
                    <input type="text" class="form-control " id="age" value="" name="age" placeholder="{{$dato->age}}"/>    
                </div>
                
            </div>
            <div class="col-md-6 col-sm-12">
                
                <div class="form-group">
                    <label for="">Genero</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="M">Masculino</option>
                        <option  value="F">Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Correo eletronico</label>
                    <input type="text" class="form-control "  id="email" value=""  name="email" placeholder="{{$dato->email}}"/>    
                </div>
                <input id="estado_user" type="hidden" name="estado_user" value="1">
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
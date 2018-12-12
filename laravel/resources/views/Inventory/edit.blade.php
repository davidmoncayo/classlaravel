@extends('layouts.app')

@section('content')

<div class="container">
    <form class="form" method="post" id="form" action="{{action('productsController@update', $id)}}" enctype="multipart/form-data">
    @csrf
    
    <div>
        <a class="btn btn-dark" href="{{url('products')}}" id="btnReg">Inventorario</a>
        
    </div>
        <input type="hidden" name="_method" value="PUT"/>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <br>
                    
                    <input type="text" class="form-control" id="id" value="" name="nuip"  disabled/>    
                </div> 
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" class="form-control " id="name" value=""  name="name" placeholder="Nombre"/>    
                </div>
                <div class="form-group">
                    <label for="">Cantida</label>
                    <input type="text" class="form-control " id="cantidad" value="" name="cantidad" placeholder="Cantida"/>    
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control "  id="descripcion" value="" name="descripcion" placeholder="Descripcion"/>    
                </div>
            
                <div class="form-group">
                    <label for="">Precio</label>
                    <input type="text" class="form-control " id="precio" value="" name="precio" placeholder="Precio"/>    
                </div>
                 <div class="form-group">
                <input type="file" id="ruta" name="ruta" required/>
                </div>
                    <div class="col-xs-12 col-md-5 ml-auto">
                        <input type="hidden" class="form-control"  name="activo" value="1"/>
                    </div>
                    
                <div >
                    
                    <input type="hidden" name="user_pub" value="{{ $user = Auth::id() }}" />
                    
                </div>  
                
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

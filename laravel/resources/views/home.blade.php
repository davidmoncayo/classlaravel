@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="style.css" type="text/css" />


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <?php
               
                //MOSTAR IMAGENES storage/Umo3504GSxTPivAZuSCggPLCPOJdCY00ZKSJCq3t.png //
                
                $products = DB::table('products_cmp')->select('*')->orderBy('products_cmp.id','desc')->get();
               
                
                
                
                
             ?>
                @foreach ($products as $products)
                
                
                <h1 class="">{{$products->name}}</h1>
                <label class="">{{$products->descripcion}}</label>
                
                
                
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
<img class="d-block w-100" src="{{ Storage::url($products->ruta) }}" alt="First slide">
    </div>
    
    <!--<div class="carousel-item">
      <img class="d-block w-100" src="{{ Storage::url($products->ruta) }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Storage::url($products->ruta) }}" alt="Third slide">
    </div>-->
 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php 
error_reporting(0);
$com = DB::table('communication_cmp')->select('*')->get();
                   foreach ($com as $comm)
                $con_activada = $comm->id_fab
                  
                  
                  ?>
                  
                <h2>Cantidad</h2>
                <label class="">{{$products->cantidad}} Metros</label>
                <label class=""> Precio {{$products->precio}} $</label>
    
                   <br>
                  
                     
                         
                         
                        
                         @if ($products->user_pub == Auth::id())
                         <form action="{{ url('publicacion',[$products->user_pub])}}" method="get">
                         @csrf
                         <button type="submit" name="button_com" class="btn btn-secondary w-50"  disabled>Comunicarse con el proveedor</button>
                         </form>
                         @elseif($con_activada == 1)
                         <form action="{{ url('publicacion',[$products->user_pub])}}" method="get">
                         @csrf
                         <button type="submit" name="button_com" class="btn btn-secondary w-50"  disabled>Usuario con negociacion en proceso...</button>
                         </form>
                         @else
                         <form action="{{ url('publicacion',[$products->user_pub])}}" method="get">
                         @csrf
                         <button type="submit" name="button_com" class="btn btn-secondary w-50" >Comunicarse con el proveedor</button>
                         
                         </form>
                         @endif
                         
                         
                     
                 
                    <hr>
         @endforeach
                
                
                
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

   

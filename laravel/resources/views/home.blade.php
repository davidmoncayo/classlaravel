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
               
                
                
                $products = DB::table('products_cmp')->select('*')->get();
             ?>
                @foreach ($products as $products)
                
                <h1 class="">{{$products->name}}</h1>
                <label class="">{{$products->descripcion}}</label>
                
                
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://previews.123rf.com/images/antvlk/antvlk1702/antvlk170200061/72065863-un-mont%C3%B3n-de-color-textil-peruana-rugosa-y-telas-.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://static.vix.com/es/sites/default/files/styles/large/public/imj/lasmanualidades/P/Pegamentos-para-telas-1.jpg?itok=b_RrDKhF" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://info7.blob.core.windows.net.optimalcdn.com/images/2016/12/14/telas.jpg" alt="Third slide">
    </div>
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
                <h2>Cantidad</h2>
                <label class="">{{$products->cantidad}} Metros</label>
                <label class=""> Precio {{$products->precio}} $</label>
    
                   <br>
                  
                     <form action="{{ url('publicacion',[$products->user_pub])}}" method="get">
                         
                         @csrf
                         <input type="submit" value="Submit"/>
                     </form>
                 
                    <hr>
         @endforeach
                
                
                
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

   

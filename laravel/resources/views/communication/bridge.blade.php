<!------ Include the above in your HEAD tag ---------->
@extends('layouts.app')

@section('content')

<?php error_reporting(0); 
$id = Auth::id();?>
<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
</head>
<?php
//consulta PARA SAVER EL ROL DEL USUARIO//
$rol_us = DB::table('users')->select('rol_user')
->where('id','=',Auth::id())->get();
foreach ($rol_us as $rol_use)
$rol_user = $rol_use->rol_user;

$men = DB::table('communication_cmp')
->select('id_fab')
->get();
foreach ($men as $mens)
$mensaj = $mens->id_fab;
if($rol_user == 2 && $mensaj == 1){?>
    
    <form method="post" action="{{action('communicationController@destroy', $id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" name="dere_sum" class="btn btn-danger">Finalizar negociacion</a></button>
                    </form> 
    <?php
}
?>
@if (3 == Auth::id())
@else
<body>
<div class="container">
<h3 class=" text-center">Chat</h3>
        <!-- CHAT ENVIAR Y RESIVIR MENSAJES-->
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
              <div class="received_msg">
                <div class="received_withd_msg">
        <?php
        if($post_id == null){
         $userr = DB::table('communication_cmp')->select('id_user')->where('id_fab','=',$mensaj)->get();
                   foreach ($userr as $userrr)
                  $usuario_int = $userrr->id_user;
         
         $communicationn = DB::table('communication_cmp')
        ->join('users','users.id','=','communication_cmp.id_publicador')
        ->select('users.name', 'communication_cmp.mensaje','communication_cmp.id','communication_cmp.created_at')
        ->orderBy('communication_cmp.id')
        ->get();
          //$communicationn = DB::table('communication_cmp')->select('*')->where('id_fab','=',Auth::id(),'AND','id_user','=',$usuario_interesado)->get();
          //$communicationn = DB::table('communication_cmp')->select('*')->where('id_user','=',Auth::id(),'AND','id_fab','=',$usuario_interesado)->get();
        }else{
          
         $communicationn = DB::table('communication_cmp')
        ->join('users','users.id','=','communication_cmp.id_publicador')
        ->select('users.name', 'communication_cmp.mensaje','communication_cmp.id','communication_cmp.created_at')
        ->orderBy('communication_cmp.id')
        ->get();
          //$communicationn = DB::table('communication_cmp')->select('*')->where('id_user','=',Auth::id(),'and','id_publicador','=',$post_id)->get();
        }
                  
        ?>
                 
                  @foreach ($communicationn as $communications)
                  
                  
                  <div class="incoming_msg_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                  <strong>{{$communications->name}} </strong>
                  <p>{{$communications->mensaje}}</p>
                  <span class="time_date"> Mensaje enviado {{$communications->created_at}}</span>
                  <hr>
                 
             @endforeach 
            
            
            
 </div>
            
  </div>
  
  
 
        

<!--Sver si el fabricante envio mensaje-->

<?php
        if ($usuario_interesado == null){
                   $com = DB::table('communication_cmp')->select('*')->where('id_user','=',Auth::id())->get();
                   foreach ($com as $comm)
                  
                  $usuario_interesado = $comm->id_fab;
               }
 
       
          ?>   
          
        

         <form method="post" action="{{url('communication')}}" >
           @csrf 
          
          <div class="type_msg">
            <div class="input_msg_write">
              
              
             <input type="text" class="write_msg" placeholder="Escribe un mensaje..."  name="mensaje"/>
             
             <?php 
             if($post_id == null){
              $com = DB::table('communication_cmp')->select('*')->where('id_fab','=',Auth::id())->get();
                  foreach ($com as $comm)
                  
              $usuario_interesado = $comm->id_user;
              $post_id = $usuario_interesado;    
             ?>
             
              <input type="hidden" name="id_fab" value=" {{ $user = Auth::id() }} "/>
              <input type="hidden" name="id_user" value="{{$post_id}}" />
              <input type="hidden" name="id_publicador" value="{{ $user =Auth::id() }}"/>
             <?php
             }else{?>
              <input type="hidden" name="id_fab" value=" {{ $post_id }} "/>
              <input type="hidden" name="id_user" value="{{$user = Auth::id() }}" />
              <input type="hidden" name="id_publicador" value="{{ $user =Auth::id() }}"/>
            <?php } ?>
         
             
             
         
         
     <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
     @endif
     <hr>
     
            </form>
            </div>
          </div>
        </div>
      </div>
   
    </div>
    </div>
       
      </div>
      </div>
    </div>
   </div>
</div>
 
@endsection
    </body>
    </html><!------ Include the above in your HEAD tag ---------->

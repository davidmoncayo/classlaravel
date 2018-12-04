<!------ Include the above in your HEAD tag ---------->
@extends('layouts.app')

@section('content')

<?php error_reporting(0); ?>




<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
</head>
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
         
         
         $communicationn = DB::table('communication_cmp')
        ->join('users','users.id','=','communication_cmp.id_fab')
        ->select('users.name', 'communication_cmp.mensaje','communication_cmp.id')
        ->orderBy('communication_cmp.id')
        ->get();
          //$communicationn = DB::table('communication_cmp')->select('*')->where('id_fab','=',Auth::id(),'AND','id_user','=',$usuario_interesado)->get();
          //$communicationn = DB::table('communication_cmp')->select('*')->where('id_user','=',Auth::id(),'AND','id_fab','=',$usuario_interesado)->get();
        }else{
          
         $communicationn = DB::table('communication_cmp')
        ->join('users','users.id','=','communication_cmp.id_user')
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
  
  
 
        

<!--FORMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM-->

<?php
          $com = DB::table('communication_cmp')->select('id_user')->where('id_fab','=',Auth::id())->get();
                  foreach ($com as $comm)
                 
                  $usuario_interesado = $comm->id_user;
                  
                  
            
          ?>   


         <form method="post" action="{{url('communication')}}" >
           @csrf 
          
          <div class="type_msg">
            <div class="input_msg_write">
              
              
              <input type="text" class="write_msg" placeholder="Escribe un mensaje..."  name="mensaje"/>
             <?php if($post_id == null){
             $post_id = $usuario_interesado;
             }?>
              <input type="hidden" name="id_fab" value="{{ $post_id }}"/>
              <input type="hidden" name="id_user" value="{{ $user = Auth::id() }}" />
              <input type="hidden" name="id_publicador" value="{{ $user =Auth::id() }}"/>
             
             
              
              <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </form>
            </div>
          </div>
        </div>
      </div>
      
      
      
    </div></div>
    
    


                
                
                
                
                     
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
    </body>
    </html><!------ Include the above in your HEAD tag ---------->

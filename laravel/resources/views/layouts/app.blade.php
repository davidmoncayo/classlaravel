<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'COMPROMAN') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="col-md-2">
                    <img src="/img/dos.png"></img>
                </div>
                <a class="navbar-brand" href="http://classlaravel-davidevil.c9users.io/login">
                    {{ config('', 'COMPROMAN') }}
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar session') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                            
                            
                        @else
                        
                        <!--SE AGREGO LOS 3 ITEMP EN LA BARRA-->
                        <li class="nav-item">
                                <a class="nav-link" href="../home">{{ __('Inicio') }}</a>
                            </li>
                            <?php
                            
                             $user = Auth::user()->rol_user; 
                            
                            if( $user == 3){
                                ?>
                                
                            </li>
                            
                                <?php
                            }else{
                                ?>
                                <li class="nav-item">
                                <a class="nav-link" href="{{url('products')}}">{{ __('Inventario') }}</a>
                                <?php
                            }
                            ?>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('communication')}}">{{ __('Comunicacion') }}</a>
                            </li>
                          <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>-->
                            </form>
                        <!--SE FINALIZO EL AGREGAR LINK LA BARRA-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{url('users')}}">Configuracion</a>
                                    <a class="dropdown-item" href="home">Acerca de nosotros</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>
                                   
         <!-- SE FINALIZO LAS OPCIONES-->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="card-body">
            <p class="text-info text-center">Todos los derechos reservados Comproman 2018 by DavidEvil5</p>
        </div>
</body>
</html>

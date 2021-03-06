@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Regristo de usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                    <div class="form-group row">
                            <label for="rol_user" class="col-md-4 col-form-label text-md-right">{{ __('Rol de usuario') }}</label>

                            <div class="col-md-6">
                                <select id="rol_user" type="text" class="form-control{{ $errors->has('rol_user') ? ' is-invalid' : '' }}" name="rol_user" value="{{ old('rol_user') }}" required autofocus>
                                <option value="2">Proveedor de tela</option>
                                 <option value="3">Fabricante de ropa</option>
                                 
                                </select>
                                @if ($errors->has('rol_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rol_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
            



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       <!--SE AGREGO EL CAMPO APELLIDO-->
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            
                            <!-- SE AGREGO EL CAMPO TELEFONO-->
                            
                            <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <!-- SE AGREGO LA DIRECCION-->
                            <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Direcion') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            
                            <!-- SE AGREGO EL CAMPO EDAD-->
                            <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <!-- SE AGREGO EL CAMPO GENERO-->
                            
                            <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                                
                                <label for="">Masculino
                                <input id="gender" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="Masculino"  required autofocus>
                                </label>
                                <label for="">Femenino
                                <input id="gender" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender"  value="Femenino" required autofocus>
                                </label>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                            <!-- FINALIZACION DE CAMPOS AGREGADOS-->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Eletronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña Nueva') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contrasena') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        
                        <!-- SE AGREGO el estado-->
                            <div class="form-group row">
                           <div class="col-md-6">
                                <input id="estado_user" type="hidden" class="form-control{{ $errors->has('estado_user') ? ' is-invalid' : '' }}" name="estado_user" value="1" required autofocus>

                                @if ($errors->has('estado_user'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registarme') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

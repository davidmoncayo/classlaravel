@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                    @endif
                
            
                
                    
                
                    
                
            </div>
        </div>
    </div>
</div>
@endsection

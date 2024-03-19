@extends('adminlte::page')

@section('title', 'Messages -> View message')

@section('content_header')
    <h1>Messages  ->View Messages</h1>
@stop

@section('content')
   <div class="card">
        <form method="post" action="">
             @csrf
             @method('put')
            <div class="card-body" >
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div>
            @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$message->name}}" readonly>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$message->email}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <input type="text" name="message" class="form-control @error('message') is-invalid @enderror" id="message" value="{{$message->Message}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            </div>
            <div class="card-footer">
                 <a href="{{route('admin.messages.index')}}" type="cancel" class="btn btn-default float-right">Cancel</a>
            </div>
        </form>   
   </div>
@stop

@section('footer')
    Copyright &copy 2024 <a href="">Charles's Blog</a>. All rights reserved.@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
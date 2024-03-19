@extends('adminlte::page')

    @section('title', 'Blogs')

    @section('content_header')
        <h1>Blogs</h1>
    @stop

    @section('content')
        <div class="card">
            <div class="card-header">
                        <h3 class="card-title">Message list</h3>
            </div>
            <div class="card-body">
                    @if (session('status'))
                                <div class="alert alert-success alert-dismissible auto-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</buttom>
                                    {{ session('status') }}
                                </div>
                    @endif
                <table class="table table-bordered">
                    <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                        
                                <tr>
                                    <td>{{$message->id}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{substr($message->Message,0,50)}}</td>
                                    
                                    
                                    <td>
                                        <a href="{{route('admin.messages.show',$message)}}" class="btn btn-warning"><i class="fas fa-eye "></i></a>
                                        <a href="{{route('admin.messages.delete',$message)}}" class="btn btn-danger"><i class="fas fa-trash "></i></a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    @stop
    @section('footer')
        Copyright &copy 2024 <a href="">Charles's Blog</a>. All rights reserved.
    @endsection
    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script> console.log('Hi!'); </script>
    @stop
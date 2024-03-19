@extends('adminlte::page')

@section('title', 'Messages -> Delete Message')

@section('content_header')
    <h1>Messages  ->Delete Message</h1>
@stop

@section('content')
   <div class="row">
        <div class="col-lg-5 offset-lg-4">
            <div class="card">
                <form method="post" action="{{route('admin.messages.destroy', $message)}}">
                            @csrf
                            @method('delete')
                            <div class="card-header" >
                                <h3>System Confirmation</h3>
                            </div>
                            <div class="card-body" >
                                <p>You are not about to delete this message. Are you sure with your action?</p>
                            </div>

                            <div class="card-footer">
                                <button type="update" class="btn btn-primary">Delete</button>
                                <a href="{{route('admin.messages.index')}}" type="cancel" class="btn btn-default float-right">Cancel</a>
                            </div>
                </form>   
            </div>
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
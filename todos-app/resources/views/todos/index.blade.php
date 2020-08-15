@extends('layouts.app')

@section('title')

Todos App

@endsection

@section('content')
<h1 class="text-center my-5"><b>Todos Page</b></h1>
<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-default">
            <div class="card-header">
                <b>Todos</b>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $Todo)
                    <li class="list-group-item">
                        {{ $Todo->name }}

                        @if(!$Todo->completed)
                        <a href="/todos/{{ $Todo->id }}/complete" class="btn btn-warning btn-sm float-right ml-2" style="color: white" >Complete</a>
                        @endif


                        <a href="/todos/{{ $Todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
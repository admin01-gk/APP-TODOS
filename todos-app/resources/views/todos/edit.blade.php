@extends('layouts.app')


@section('content')
    <h1 class="text-center my-5"><b>Create Todos</b></h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header"><b>Edit Todos</b></div>
                <div class="card-body">
                    <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required value="{{ $todo->name }}" >
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control"  cols="1" rows="4" placeholder="Description" required value="" >{{ $todo->description }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">Update Todos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
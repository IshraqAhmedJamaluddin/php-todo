@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center w-50">
            <h1 class="display-2 text-white">Edit your Todo</h1>
            <form action="{{ route('todo.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="input-group mb-3 w-100">
                    <input type="text" name="title" id="title" class="form-control form-control-lg" value="{{$todo->title}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success" id="button-addon2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
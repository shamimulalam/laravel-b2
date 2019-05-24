@extends('layout.master')
@section('content')
    <h1>{{ $title }}</h1>

    <form method="post" action="{{ route('blog.store') }}">
        @csrf
        <input required class="form-control" type="text" name="title" placeholder="Blog Title">
        <br>
        <textarea required class="form-control" name="details" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-info" type="submit">Create</button>
    </form>
@endsection
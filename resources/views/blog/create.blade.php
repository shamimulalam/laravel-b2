@extends('layout.master')
@section('content')
    <h1>{{ $title }}</h1>

    <form method="post" action="{{ route('blog.store') }}">
        @csrf
        @include('blog._form')
        <button class="btn btn-info" type="submit">Create</button>
    </form>
@endsection
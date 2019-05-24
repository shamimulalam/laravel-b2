@extends('layout.master')
@section('content')
    <h1>{{ $title }}</h1>

    <form method="post" action="{{ route('blog.update',$blog->id) }}">
        <input type="hidden" name="_method" value="PUT">
        @include('blog._form')
        <button class="btn btn-info" type="submit">Update</button>
    </form>
@endsection
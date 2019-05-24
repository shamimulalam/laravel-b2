@extends('layout.master')
@section('content')
    <h1>{{ $title }}</h1>

    <form method="post" action="{{ route('blog.update',$blog->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input required value="{{ $blog->title }}" class="form-control" type="text" name="title" placeholder="Blog Title">
        <br>
        <textarea required class="form-control" name="details" id="" cols="30" rows="10">
                {{ $blog->details }}
            </textarea>
        <button class="btn btn-info" type="submit">Update</button>
    </form>
@endsection
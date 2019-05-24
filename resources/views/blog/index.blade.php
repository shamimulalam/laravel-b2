@extends('layout.master')
@section('content')
    <a class="btn btn-info" href="<?php echo route('blog.create') ?>">Add new blog</a>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Details</th>
            <th>Actions</th>
        </tr>
        <!--            --><?php //foreach ($blogs as $blog){ ?>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->details }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                    <form action="{{ route('blog.destroy',$blog->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="return confirm('Are you confirm to delete this blog')" class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
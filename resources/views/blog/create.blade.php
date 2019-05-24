<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
<div class="row">
    <div class="col-md-6">
        <h1>{{ $title }}</h1>

        <form method="post" action="{{ route('blog.store') }}">
            @csrf
            <input required class="form-control" type="text" name="title" placeholder="Blog Title">
            <br>
            <textarea required class="form-control" name="details" id="" cols="30" rows="10"></textarea>
            <button class="btn btn-info" type="submit">Create</button>
        </form>
    </div>
</div>
</body>
</html>
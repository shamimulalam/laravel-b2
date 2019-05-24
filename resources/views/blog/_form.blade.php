@csrf
<input required value="@isset($blog) {{ $blog->title }}@endisset" class="form-control" type="text" name="title" placeholder="Blog Title">
<br>
<textarea required class="form-control" name="details" id="" cols="30" rows="10">@isset($blog) {{ $blog->details }} @endisset</textarea>
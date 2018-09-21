@extends ('layouts.master')

@section ('content')
<h1>Create a post</h1>
<hr />
<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Post</button>
    </div>

    @include('layouts.errors')
</form>


@endsection

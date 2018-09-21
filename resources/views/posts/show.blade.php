@extends ('layouts.master')

@section ('content')

<h1>{{$post->title}}</h1>
<small class="float-left">
    Posted by
    @if ($post->user !== null)
        <a href="/users/{{$post->user->id}}">{{ $post->user->name }}</a>
    @else
         <a href="#">[deleted]</a>
    @endif
    {{$post->created_at->diffForHumans()}}
</small>
<br/>
<br/>
{{ $post->body }}
<div class="padding-top-md">
    @include('posts.tags')
</div>
<hr />
<div class="comment">
    <ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <small class="text-muted">
                <a href="/users/{{$comment->user->id}}"> {{$comment->user->name}}</a> -
                {{$comment->created_at->diffForHumans()}}
            </small>
            <p class="pt-3 mb-0">
                {{ $comment->body }}
            </p>
        </li>
        @endforeach
    </ul>

    <br />
    <div class="card">
        <div class="card-body no-padding">
            @include('layouts.errors')
        </div>
        <div class="card-body">
            <form method="POST" action="{{$post->id}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Your comment" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection

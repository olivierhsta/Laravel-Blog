@extends ('layouts.master')

@section ('content')
<h1>{{$user->name}}</h1>
<small class="padding-bottom-md">Member since {{$user->created_at->format('F jS \\, Y')}}</small>

<ul class="padding-top-md nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="#posts">Posts ({{$user->posts->count()}})</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#comments">Comments ({{$user->comments->count()}})</a>
    </li>
</ul>
<br />
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="posts" name="posts">
        @foreach ($user->posts as $post)
        @include('posts.post')
        @endforeach
    </div>
    <div class="tab-pane fade" id="comments" name="comments">
        <div class="list-group">
            @foreach ($user->comments as $comment)
                <a href="/posts/{{$comment->post->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$comment->post->title}}</h5>
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </div>
                    <p class="mb-1">{{$comment->body}}</p>
                </a>
            @endforeach

        </div>

    </div>
</div>


@endsection

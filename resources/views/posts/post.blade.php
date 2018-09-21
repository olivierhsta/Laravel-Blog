<div class="card border-secondary mb-3">
    <div class="card-header">
        <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
        @if ($post->user !== null)
            <small class="float-left">Created by <a href="/users/{{$post->user->id}}">{{ $post->user->name }}</a></small>
        @else
            <small class="float-left">Created by <a href="#">[deleted]</a></small>
        @endif
        <small class="float-right">{{$post->created_at->toDayDateTimeString()}}</small>
    </div>
    <div class="card-body">
        <p class="card-text">{{$post->body}}</p>
        <div class="float-right">
            @include('posts.tags')
        </div>
    </div>
</div>

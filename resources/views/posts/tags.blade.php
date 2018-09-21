@if (count($post->tags))

        @foreach($post->tags as $tag)
            <span class="badge badge-pill badge-custom">
                <a href="/posts/tags/{{$tag->name}}" class="link-unstyled">{{$tag->name}}</a>
            </span>
        @endforeach
@endif

<ul class="list-inline social-links">
    <li class="list-inline-item">
        <iframe id="gh-fork" src="https://ghbtns.com/github-btn.html?user=blackrockdigital&amp;repo=startbootstrap-clean-blog&amp;type=fork" allowtransparency="true" scrolling="0" width="55px" height="20px" frameborder="0"></iframe>
        <iframe id="gh-star" src="https://ghbtns.com/github-btn.html?user=blackrockdigital&amp;repo=startbootstrap-clean-blog&amp;type=watch&amp;count=true" allowtransparency="true" scrolling="0" width="100px" height="20px" frameborder="0"></iframe>
    </li>
</ul>
<div class="card sb-card">
    <div class="card-body">
        <h4>Description:</h4>
        <p class="mb-0">Clean blog is a carefully styled Bootstrap blog theme that is perfect for personal or company blogs. This theme features four HTML pages including a blog index, an about page, a sample post, and a contact page.</p>
    </div>
</div>
<div class="card sb-card">
    <div class="card-body">
        <h4>Tags</h4>
        <ul class="mb-0">
            @foreach($tags as $name)
                <li>
                    <a href="/posts/tags/{{$name}}">{{$name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="card sb-card">
    <div class="card-body">
        <h4>Archives</h4>
        <ul class="mb-0">
            @foreach($archives as $stats)
                <li>
                    <a href="/posts?month={{ $stats['month'] }}&year={{ $stats['year']}}">{{ $stats['month'] . ' ' . $stats['year'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<br />

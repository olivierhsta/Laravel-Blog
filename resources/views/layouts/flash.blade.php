@if ($flash = session('message'))
    <div id="flash-message" class="badge badge-success" role="badge">
        {{ $flash }}
    </div>
@endif

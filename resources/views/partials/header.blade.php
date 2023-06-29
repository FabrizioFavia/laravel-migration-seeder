<header class="p-3">
    <img class="logo" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Laravel Logo">
    <span>Some links: </span>
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach
</header>
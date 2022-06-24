<header class="container-lg">

    <div class="logo">
        <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="DC Logo"></a>
    </div>

    <nav>
        <ul>
            @foreach ($menus as $element )
                <li class="{{ Route::currentRouteName() === $element->link ? 'active' : ''}}"><a href="{{ route($element->link)}}">{{$element->title}}</a></li>
            @endforeach
        </ul>
    </nav>

</header>

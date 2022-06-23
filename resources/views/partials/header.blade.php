<header class="container-lg">

    <div class="logo">
        <a href="#"><img src="{{asset('img/dc-logo.png')}}" alt="DC Logo"></a>
    </div>

    <nav>
        <ul>

            {{-- Non avendo tutte le viste ho impostato i link dei menù tutti uguali ed questo causa l aggiunta della classe active  su tutti gli li ad eccezione di Comics che ha la sua vista--}}
            @foreach ($menus as $element )
                <li class="{{ Route::currentRouteName() === $element->link ? 'active' : ''}}"><a href="{{ route($element->link)}}">{{$element->title}}</a></li>
            @endforeach
        </ul>
    </nav>

</header>

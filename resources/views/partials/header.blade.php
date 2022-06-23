<header class="container-lg">

    <div class="logo">
        <a href="#"><img src="{{asset('img/dc-logo.png')}}" alt="DC Logo"></a>
    </div>

    <nav>
        <ul>

            @foreach ($menus as $element )
                <li><a href="{{$element->link}}">{{$element->title}}</a></li>
            @endforeach
        </ul>
    </nav>

</header>

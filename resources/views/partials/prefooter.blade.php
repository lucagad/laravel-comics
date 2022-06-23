<section class="section_bg">
    <div class="card_container container-lg">

        <div class="card_box">

            @foreach ($prefooters as $element )

            <a href="#">
                <img src="{{asset($element->image)}}" alt="{{$element->title}}">
                <span>{{$element->title}}</span>
            </a>

            @endforeach
        </div>

    </div>
</section>

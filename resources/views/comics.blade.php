@extends('layouts.main')

@section('content')

<main>
    <div class="container">
            <div class="container_card">

                @foreach ( $comics as $comic )

                    <div class="card_custom">
                        <div class="image_container">
                        <img src="{{asset($comic->image)}}" alt="cardItem.series">
                        <div class="info_layer">
                            <div>
                                <span>Type: </span>
                                <span>{{$comic->type}}</span>
                            </div>
                        </div>
                        </div>
                        <h5>{{$comic->title}}</h5>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection

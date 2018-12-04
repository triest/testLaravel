@extends('layouts.news', ['title' => 'Главная'])

@section('content')
    @guest
    @else

    @endguest
    <div class="container">

        <div class="col-md-8">
            @foreach($blocks as $block)
                <div class="card mb-4">
                    <p class="card-title"><b>{{$block->title}}</b></p>
                    <p class="card-subtitle">{{$block->created_at}}</p>
                    <p class="card-body">{{$block->description}}</p>
                </div>
            @endforeach
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

@endsection


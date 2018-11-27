@extends('layouts.news', ['title' => 'Новости'])


@section('content')
    <div class="container">
        <!-- Example row of columns -->

        <div class="row text-center py-5">
                    @foreach($news as $new)
                   <div class="col-md-4">
                            <H2>{{$new->title}}</H2>
                             {{$new->description}}
                    </div>
            @endforeach
        </div>
    </div>
@endsection

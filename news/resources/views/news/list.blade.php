@extends('layouts.news', ['title' => 'Новости'])


@section('content')
    <div class="container">
        @guest
        @else
            <a class="btn btn-primary" href="{{ route('createNews') }}">Создать новость</a>
            <a class="btn btn-secondary" href="{{ route('mainTag') }}">Создать тег</a>
        @endguest
        <div class="row text-center py-5">
            @foreach($news as $new)
                <div class="col-md-4">
                    <H2>{{$new->title}}</H2>
                    <h7>{{$new->created_at}}</h7>
                    <br>
                    {{$new->getShortDescription()}}
                    <br>
                    <b> <a href="{{route('detail',['id'=>$new->id])}}">подробно...</a></b>
                </div>
            @endforeach
        </div>
    </div>
@endsection

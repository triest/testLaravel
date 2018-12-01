@extends('layouts.news', ['title' => $new->title])


@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card-body">
                    <H2>{{$new->title}}</H2>
                       <h7>{{$new->created_at}}</h7>
                @guest
                @else
                    <br>
                    <a class="btn btn-primary" href="{{route('edit',['id'=>$new->id])}}">Редактировать новость</a>
                    <a class="btn btn-danger"  onclick="return confirm('Вы уверены?')" href="{{route('newsdelete',['id'=>$new->id])}}" role="link">Удалить</a>
                    <br>
                @endguest<br>
                <img height="250" src="<?php echo asset("/images/upload/$new->image_name")?>"></img></a><br>
                    {{$new->description}}
                <br>

                Теги:
                @foreach($tags as $tag)
                    <a href="{{route('seachByTag',['id'=>$tag->id])}}"> {{$tag->title}} </a>
                @endforeach
                <br>
                <a class="btn btn-secondary" href="{{ route('mainNews') }}">Назад</a>
            </div>
        </div>
    </div>
@endsection
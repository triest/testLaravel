@extends('layouts.main', ['title' => $new->title])


@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card-body">
                    <H2>{{$new->title}}</H2>

                       <h7>{{$new->created_at}}</h7>
                @guest
                @else
                    <a href="{{route('edit',['id'=>$new->id])}}">Редактировать новость</a>
                @endguest<br>
                <img height="250" src="<?php echo asset("/images/upload/$new->image_name")?>"></img></a><br>
                    {{$new->description}}
                <br>
                <a class="btn btn-secondary" href="{{ route('mainNews') }}">Назад</a>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.news', ['title' => $new->title])


@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card-body">
                    <H2>{{$new->title}}</H2>
                       <h7>{{$new->created_at}}</h7> <br>
                <img height="250" src="<?php echo asset("/images/upload/$new->image_name")?>"></img></a><br>
                    {{$new->description}}
                <br>
                <a class="button blue" href="{{route('mainNews')}}" role="link">К ленте новостей</a>
            </div>
        </div>
    </div>
@endsection
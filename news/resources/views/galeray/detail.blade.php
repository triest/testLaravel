@extends('layouts.main', ['galeray' => $image->title])


@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card-body">
                    <H2>{{$image->title}}</H2>
                       <h7>{{$image->created_at}}</h7>
                @guest
                @else

                @endguest<br>
                <img height="250" src="<?php echo asset("/images/upload/$image->image_name")?>"></img></a><br>
                <br>

                <a class="button blue" href="{{route('mainNews')}}" role="link">К ленте новостей</a>
            </div>
        </div>
    </div>
@endsection
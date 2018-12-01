@extends('layouts.main', ['title' => $image->title])


@section('content')
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card-body">
                    <H2>{{$image->title}}</H2>
                       <h7>{{$image->created_at}}</h7>
                @guest
                @else
                    <br>
                    <a class="btn btn-danger"  onclick="return confirm('Вы уверены?')" href="{{route('imagedelete',['id'=>$image->id])}}" role="link">Удалить</a>
                    <br>
                @endguest<br>
                <img height="250" src="<?php echo asset("/images/upload/$image->image_name")?>"></img></a><br>
                <br>
                <a class="btn btn-secondary"  href="{{route('galeray')}}" role="link">К галерее</a>
            </div>
        </div>
        <script>
            $(".delete").on("submit", function(){
                return confirm("Are you sure?");
            });
        </script>

@endsection
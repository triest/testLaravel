@extends('layouts.news', ['title' => 'Новости'])


@section('content')
    <div class="container">
        <!-- Example row of columns -->

        <div class="row text-center py-5">
                    @foreach($news as $new)
                   <div class="col-md-4">
                            <H2>{{$new->title}}</H2>
                             {{$new->description}}
                       <br>
                          <b> <a href="{{route('detail',['id'=>$new->id])}}">подробно...</a></b>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

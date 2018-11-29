@extends('layouts.main', ['title' => 'Новости'])


@section('content')
    <div class="container">
               <a class="btn btn-primary" href="{{ route('createNews') }}">Create news</a>
        <div class="row text-center py-5">
                    @foreach($news as $new)
                   <div class="col-md-4">
                            <H2>{{$new->title}}</H2>
                              <h7>{{$new->created_at}}</h7> <br>
                             {{$new->getShortDescription()}}
                       <br>
                          <b> <a href="{{route('detail',['id'=>$new->id])}}">подробно...</a></b>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

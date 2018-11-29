@extends('layouts.main', ['title' => 'Управление тегами'])

@section('content')
    <form action="{{route('storeTag')}}" method="post" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        <input type="text" class="form-control" id="title" name="title" required placeholder="Введите имя тега" required
               value={{ old('title') }} >
        @if($errors->has('title'))
            <font color="red"><p>  {{$errors->first('title')}}</p></font>
        @endif
        <button type="submit" class="btn btn-default">Создать тег</button>
    </form>

    <div class="row text-center py-5">
        @foreach($tags as $tag)
            <div class="col-md-4">
                <H2>{{$tag->title}}</H2>
                <h7>{{$tag->created_at}}</h7>
                <br>
            </div>
        @endforeach
    </div>

@endsection

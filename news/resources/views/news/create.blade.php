@extends('layouts.main', ['title' => 'Новости'])

@section('content')

    <form action="{{route('storeNews')}}" method="post" enctype="multipart/form-data" novalidate>
    {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Заголовок новости:</label>
            <input type="text" class="form-control" id="title" name="title" required placeholder="Ведите заголовок" required value={{ old('title') }} >
            @if($errors->has('title'))
                <font color="red"><p>  {{$errors->first('title')}}</p></font>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Текст новости:</label><br>
            <textarea class="col-md-12" name="description" id="description" rows="10" cols="50"  style="height:100%;" required> {{old('description')}}</textarea>
            @if($errors->has('description'))
                <font color="red"><p>  {{$errors->first('description')}}</p></font>
            @endif
        </div>
        <label>Иллюстрация новости</label>
        <input type="file"  id="file" accept="image/*"  name="file" value="{{ old('file')}}" required>
        @if($errors->has('file'))
            <font color="red"><p>  {{$errors->first('file')}}</p></font>
        @endif
        <br>
        @foreach($tags as $tag)
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="tags[]" value="{{$tag}}">
                <label class="form-check-label" for="exampleCheck1">{{$tag->title}}</label>
            </div>

        @endforeach
        <br>
        <button type="submit" class="btn btn-default">Создать новость</button>
    </form>
    <br>
    <a class="btn btn-secondary" href="{{ route('mainNews') }}">Назад</a>
@endsection

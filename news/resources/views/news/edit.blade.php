@extends('layouts.main', ['title' => 'Новости'])

@section('content')

    <form action="{{route('saveedit',['id'=>$new->id])}}" method="post" enctype="multipart/form-data" novalidate>
    {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Заголовок новости:</label>
            <input type="text" class="form-control" id="title" name="title" required placeholder="Ведите заголовок" required value={{ $new->title }} >
            @if($errors->has('title'))
                <font color="red"><p>  {{$errors->first('title')}}</p></font>
            @endif
        </div>
        <input type="hidden" id="id" name="id" value="{{$new->id}}">
        <div class="form-group">
            <label for="exampleInputFile">Текст новости:</label><br>
            <textarea class="col-md-12"   name="description" id="description" rows="10" cols="50"  required> {{$new->description}}</textarea>
            @if($errors->has('description'))
                <font color="red"><p>  {{$errors->first('description')}}</p></font>
            @endif
        </div>
        <label>Иллюстрация новости:</label><br>
        <img height="250" src="<?php echo asset("/images/upload/$new->image_name")?>"></img></a><br>
        <input type="file"  id="file" accept="image/*"  name="file" value="{{ old('file')}}" required>
        @if($errors->has('file'))
            <font color="red"><p>  {{$errors->first('file')}}</p></font>
        @endif
        <br>
        <br>
        <button type="submit" class="btn btn-default">Сохнанить изменения</button>
    </form>
    <br>
    <a class="btn btn-secondary" href="{{ route('mainNews') }}">Назад</a>

@endsection

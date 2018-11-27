@extends('layouts.news', ['title' => 'Новости'])

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
            <label for="exampleInputFile">Текст новости:</label><br>
            <textarea  name="description" id="description"  required> {{old('description')}}</textarea>
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
        <button type="submit" class="btn btn-default">Создать новость</button>
    </form>

@endsection

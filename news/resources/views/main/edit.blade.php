@extends('layouts.news', ['title' => 'Создать блок'])

@section('content')
    <form action="{{route('saveEditBlock')}}" method="post" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название блока:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$block->title}}" required
                   placeholder="Ведите заголовок"
                   required value={{ old('title') }} >
            @if($errors->has('title'))
                <font color="red"><p>  {{$errors->first('title')}}</p></font>
            @endif
        </div>
        <input type="hidden" id="id" name="id" value="{{$block->id}}">
        <div class="form-group">
            <label for="description">Текст новости:</label><br>
            <textarea class="col-md-12 " id="description" name="description" rows="10" cols="50" style="height:100%;"
                      required placeholder="Введите текст"> {{$block->description}}</textarea>
            @if($errors->has('description'))
                <font color="red"><p>  {{$errors->first('description')}}</p></font>
            @endif
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="central" checked>Центральный
                блок
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="down">Нижний блок
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="side">Боковой блок
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="header">Шапка
            </label>
        </div>
        <br> <br>
        <button type="submit" class="btn btn-default">Сохранить изменения</button>
    </form>

@endsection
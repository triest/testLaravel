@extends('layouts.main', ['title' => 'Создать блок'])

@section('content')
    <form action="{{route('storeBlock')}}" method="post" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название блока:</label>
            <input type="text" class="form-control" id="title" name="title" required placeholder="Ведите заголовок"
                   required value={{ old('title') }} >
            @if($errors->has('title'))
                <font color="red"><p>  {{$errors->first('title')}}</p></font>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Текст новости:</label><br>
            <textarea class="col-md-12" name="description" id="description" rows="10" cols="50" style="height:100%;"
                      required> {{old('description')}}</textarea>
            @if($errors->has('description'))
                <font color="red"><p>  {{$errors->first('description')}}</p></font>
            @endif
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option
                1
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option3">Option 2
            </label>
        </div>
        <br>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option4">Option 2
            </label>
        </div>
        <br> <br>
        <button type="submit" class="btn btn-default">Создать блок</button>
    </form>

@endsection
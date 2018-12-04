@extends('layouts.news', ['title' => 'Галерея'])

@section('content')
    @guest
    @else
        <div class="row">
            <div class="row">
                Загрузить фотографию:
                <form action="{{route('uploadImage')}}" method="post" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                    <input type="text" class="form-control" id="title" name="title" required
                           placeholder="Ведите название изображения" required value={{ old('title') }} >
                    @if($errors->has('title'))
                        <p>  {{$errors->first('title')}}</p>
                    @endif
                    <input type="file" id="file" name="file" accept="image/x-png,image/gif,image/jpeg"
                           value="{{ old('file')}}" required>
                    @if($errors->has('file'))
                        <font color="red"><p>  {{$errors->first('file')}}</p></font>
                    @endif
                    <button type="submit" class="btn btn-default">Загрузить фотографию</button>
                </form>
            </div>
        </div>
    @endguest
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                @foreach($images as $image)
                    <div class="col-sm-6 col-md-4">
                        {{$image->title}} <br>
                        <a class="lightbox" href="<?php echo asset("/images/upload/$image->image_name")?>">
                            <img height="250" src="<?php echo asset("/images/upload/$image->image_name")?>" alt="Park">
                        </a><br>
                        <b> <a href="{{route('imagedetail',['id'=>$image->id])}}">подробно...</a></b>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

@endsection


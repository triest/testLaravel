@extends('layouts.main', ['title' => 'Главная'])

@section('content')
    Главная страница сайта
    <br>
    @guest
    @else
        <a class="btn btn-secondary" href="{{route('add block')}}" role="link">Добавить блок</a>

    @endguest


@endsection

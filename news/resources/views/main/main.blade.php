@extends('layouts.main', ['title' => 'Главная'])

@section('content')
    <a class="btn btn-secondary" href="{{route('createBlock')}}" role="link">Создать блок</a>

@endsection
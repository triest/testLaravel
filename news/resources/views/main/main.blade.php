@extends('layouts.news', ['title' => 'Новости'])


@section('content')
    <div class="container">
        @guest
        @else
            <a class="btn btn-primary" href="{{ route('createBlock') }}">Создать блок</a>
        @endguest
        <div class="row text-center">
            <ol>

            </ol>
        </div>
    </div>
@endsection

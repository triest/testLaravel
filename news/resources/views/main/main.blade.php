@extends('layouts.main', ['title' => 'Новости'])


@section('content')
    <div class="container">
        @guest
        @else
            <a class="btn btn-primary" href="{{ route('createBlock') }}">Создать блок</a>
        @endguest
                <div class="container">
                    <div class="row">
                      <test></test>
                    </div>
                </div>


    </div>



@endsection

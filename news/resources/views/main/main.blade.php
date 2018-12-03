@extends('layouts.news', ['title' => 'Главная'])

@section('content')

    <a class="btn btn-secondary" href="{{route('createBlock')}}" role="link">Создать блок</a>

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-8">
            <img class="img-fluid rounded" src="http://placehold.it/900x400" alt="">
        </div>
        <!-- /.col-lg-8 -->

        <div id="main_div">
            <ul class='main'>

            </ul>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">This call to action card is a great place to showcase some important information
                or display a clever tagline!</p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex
                        numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus
                        at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates
                        quos eligendi labore.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex
                        numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
    <script type="text/javascript">

    </script>

@endsection
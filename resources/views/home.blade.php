@extends('base')

@include('partials.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <?php if(Auth::user()->phone): ?>
                        <h3>{{ Auth::user()->phone }}</h3>
                        <?php endif ?>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Auth::check())
                            Пользователь авторизован на сайте
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

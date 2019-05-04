@extends('base')

@section('content')

    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
        <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
             class="progress-bar"></div>
    </div>

    {{ var_dump(session('step1')) }}
    {{ var_dump(session('step2')) }}
    {{ var_dump(session('step3')) }}
    {{ var_dump(session('step4')) }}

    <section class="py-5 py-lg-6">
        <div class="container text-center">
            <p class="subtitle text-primary">Уррра!</p>
            <h1 class="h2 mb-5">Ваше заведение добавлено на сайт!</h1>
            <p class="mb-5"><img
                        src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/illustration/undraw_celebration_0jvk.svg"
                        alt="" style="width: 400px;" class="img-fluid"></p>
            <p class="text-muted mb-5">И очень скоро мы его опубликуем!</p>
            <p class="mb-5"><a href="{{ route('home') }}" class="btn btn-primary mr-2 mb-2">Главная</a><a href="{{ route('home') }}"
                                                                                        class="btn btn-outline-muted mb-2">Открыть
                    заведение</a></p>
        </div>
    </section>

@endsection
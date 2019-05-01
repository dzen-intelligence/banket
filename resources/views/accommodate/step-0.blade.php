@extends('base')

@section('content')
    <form>
        {{-- Первый шаг --}}
        <div>
            <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
                <div role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                     class="progress-bar"></div>
            </div>
            <section class="py-5 py-lg-7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <p class="subtitle text-primary">Добавьте ваше заведение</p>
                            <h1 class="h2 mb-5">Всего в 4 шага</h1>
                            <p class="text-muted">Сотни рестораторов уже разместились на сайте banket116.ru! Начните
                                получать
                                новых клиентов уже завтра! Разместитесь и вы!</p>

                            <p class="mb-5 mb-lg-0">
                                <a href="{{ route('accommodate.step1') }}" class="btn btn-primary">Добавить заведение
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-5 ml-auto d-flex align-items-center"><img
                                    src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/illustration/undraw_celebration_0jvk.svg"
                                    alt="" style="width: 400px;" class="img-fluid"></div>
                    </div>
                </div>
            </section>
        </div>
        {{--Конец первого шага--}}
    </form>

    {{-- Скрипты --}}
    {{--<script src="{{ url()->asset('/js/accommodate.js') }}"></script>--}}
    {{-- Конец скриптов --}}
@endsection
@extends('base')

@section('content')
    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
        <div role="progressbar" style="width: 60%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
             class="progress-bar"></div>
    </div>

    <section class="py-5">
        <div class="container">
            <p class="subtitle text-primary">Ваши залы</p>
            <h1 class="h2 mb-5"> Информация по залу<span class="text-muted float-right">Шаг 3</span></h1>
            <label for="form_description" class="form-label">Внимание, Вы можете заполнить информацию по залам, в более
                свободное время.</label>
            <form method="post" action="{{ route('accommodate.post_step4') }}">
                {{ csrf_field() }}

                {{--<div class="row form-block">--}}
                {{--<div class="col-lg-4">--}}
                {{--<h4>Количество залов</h4>--}}
                {{--<p class="text-muted text-sm">Нажмите на знак + если в вашем заведении более одного зала, на--}}
                {{--следующем шаге заполните всю информацию по каждому залу (Название / мини-описание /--}}
                {{--вместимость / фото)</p>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 ml-auto">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                {{--<label class="form-label">Сколько залов в вашем заведении</label>--}}
                {{--<div class="d-flex align-items-center">--}}
                {{--<div class="btn btn-items btn-items-decrease">-</div>--}}
                {{--<input type="text" value="1" disabled class="form-control input-items">--}}
                {{--<div class="btn btn-items btn-items-increase">+</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}


                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Зал</h4>
                        <p class="text-muted text-sm">Через js увеличивать / уменьшать количество залов, множить вот эти
                            блоки!</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group">
                            <label for="form_name" class="form-label">Название зала</label>
                            <input name="title" id="form_name" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="form_name" class="form-label">На сколько персон?</label>
                            <input name="persons" type="text" id="form_name" class="form-control">

                        </div>

                        <div class="form-group mb-5">
                            <label for="form_description" class="form-label">Мини описание вашего зала</label>
                            <textarea name="tiny_description" id="form_description" rows="5" aria-describedby="descriptionHelp"
                                      class="form-control"></textarea>
                            <small id="descriptionHelp" class="form-text text-muted mt-2">Заполните минимум максимума,
                                только суть!
                            </small>
                            <br>
                            <div class="badge badge-primary text-wrap">
                                Внимание, категорически запрещена вставка любых текстовых данных со своего сайта, а так
                                же с любых порталов, где есть ваше заведение! Ваш рейтинг на сайте будет занижен, а
                                значит вы получите меньше обращений, чем ваши конкуренты!
                            </div>
                        </div>


                        {{--<div class="form-group">--}}
                        {{--<form id="demo-upload" action="https://demo.bootstrapious.com/upload" class="dropzone">--}}
                        {{--<div class="dz-message text-muted">--}}
                        {{--<p>Перетащите фотографии в эту зону или выберите из файлового архива</p>--}}

                        {{--</div>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                        {{----}}
                        {{--<div id="dropzoneTemplate" class="d-none">--}}
                        {{--<div class="dz-preview dz-file-preview">--}}
                        {{--<div class="dz-image"><img data-dz-thumbnail="" alt=""--}}
                        {{--src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/logo-square.svg">--}}
                        {{--</div>--}}
                        {{--<div class="dz-details">--}}
                        {{--<div class="dz-filename"><span data-dz-name=""></span></div>--}}
                        {{--<div data-dz-size="" class="dz-size"></div>--}}
                        {{--</div>--}}
                        {{--<div class="dz-progress"><span data-dz-uploadprogress="" class="dz-upload"></span></div>--}}
                        {{--<div class="dz-success-mark"><span class="dz-icon"><i class="fa-check fa"></i></span>--}}
                        {{--</div>--}}
                        {{--<div class="dz-error-mark"><span class="dz-icon"><i class="fa-times fa"></i></span>--}}
                        {{--</div>--}}
                        {{--<div class="dz-error-message"><span data-dz-errormessage=""></span></div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>


                {{--<div class="row form-block">--}}
                {{--<div class="col-lg-4">--}}
                {{--<h4>Зал 1</h4>--}}
                {{--<p class="text-muted text-sm">Через js увеличивать / уменьшать количество залов, множить вот эти--}}
                {{--блоки!</p>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 ml-auto">--}}
                {{--<div class="form-group">--}}
                {{--<label for="form_name" class="form-label">Название зала</label>--}}
                {{--<input name="name" id="form_name" class="form-control">--}}

                {{--</div>--}}
                {{--<div class="form-group">--}}
                {{--<label for="form_name" class="form-label">На сколько персон?</label>--}}
                {{--<input name="name" id="form_name" class="form-control">--}}

                {{--</div>--}}

                {{--<div class="form-group mb-5">--}}
                {{--<label for="form_description" class="form-label">Мини описание вашего зала</label>--}}
                {{--<textarea name="name" id="form_description" rows="5" aria-describedby="descriptionHelp"--}}
                {{--class="form-control"></textarea>--}}
                {{--<small id="descriptionHelp" class="form-text text-muted mt-2">Заполните минимум максимума,--}}
                {{--только суть!--}}
                {{--</small>--}}
                {{--<br>--}}
                {{--<div class="badge badge-primary text-wrap">--}}
                {{--Внимание, категорически запрещена вставка любых текстовых данных со своего сайта, а так--}}
                {{--же с любых порталов, где есть ваше заведение! Ваш рейтинг на сайте будет занижен, а--}}
                {{--значит вы получите меньше обращений, чем ваши конкуренты!--}}
                {{--</div>--}}
                {{--</div>--}}


                {{--<div class="form-group">--}}
                {{--<form id="demo-upload" action="https://demo.bootstrapious.com/upload" class="dropzone">--}}
                {{--<div class="dz-message text-muted">--}}
                {{--<p>Перетащите фотографии в эту зону или выберите из файлового архива</p>--}}

                {{--</div>--}}
                {{--</form>--}}
                {{--</div>--}}


                {{--<div id="dropzoneTemplate" class="d-none">--}}
                {{--<div class="dz-preview dz-file-preview">--}}
                {{--<div class="dz-image"><img data-dz-thumbnail="" alt=""--}}
                {{--src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/logo-square.svg">--}}
                {{--</div>--}}
                {{--<div class="dz-details">--}}
                {{--<div class="dz-filename"><span data-dz-name=""></span></div>--}}
                {{--<div data-dz-size="" class="dz-size"></div>--}}
                {{--</div>--}}
                {{--<div class="dz-progress"><span data-dz-uploadprogress="" class="dz-upload"></span></div>--}}
                {{--<div class="dz-success-mark"><span class="dz-icon"><i class="fa-check fa"></i></span>--}}
                {{--</div>--}}
                {{--<div class="dz-error-mark"><span class="dz-icon"><i class="fa-times fa"></i></span>--}}
                {{--</div>--}}
                {{--<div class="dz-error-message"><span data-dz-errormessage=""></span></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                @if ($errors->any())
                    <div class="row form-block flex-column flex-sm-row">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <div class="row form-block flex-column flex-sm-row">
                    <div class="col text-center text-sm-left">
                    </div>
                    <div class="col text-center text-sm-right">
                        <button type="submit" class="btn btn-primary px-3">
                            Далее<i class="fa-chevron-right fa ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@extends('base')

@section('content')
    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
        <div role="progressbar" style="width: 80%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
             class="progress-bar"></div>
    </div>

    <section class="py-5">
        <div class="container">
            <p class="subtitle text-primary">Контакты | Время работы</p>
            <h1 class="h2 mb-5"> Хууу, осталось совсем немного! <span class="text-muted float-right">Шаг 4</span></h1>
            <form method="post" action="{{ route('accommodate.post_step5') }}">
                {{ csrf_field() }}

                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Время работы заведения</h4>
                        <p class="text-muted text-sm">Время работы вашего заведения с понедельника по
                            воскресенье(выводится на сайте)!</p>
                    </div>
                    <div class="col-lg-7 ml-auto">

                        <div class="form-group">
                            <label for="form_name" class="form-label">Понедельник</label>
                            <input name="monday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                            {{--<p>Интервальный временной красивый таймпикер</p>--}}
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Вторник</label>
                            <input name="tuesday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Среда</label>
                            <input name="wednesday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Четверг</label>
                            <input name="thursday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Пятница</label>
                            <input name="friday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Суббота</label>
                            <input name="saturday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Воскресенье</label>
                            <input name="sunday" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="8:00 - 24:00">
                        </div>

                    </div>
                </div>

                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Контактная информация</h4>
                        <p class="text-muted text-sm">Время работы вашего заведения с понедельника по
                            воскресенье(выводится на сайте)!</p>
                    </div>
                    <div class="col-lg-7 ml-auto">

                        <div class="form-group">
                            <label for="form_name" class="form-label">Номер телефона* На него будут звонить</label>
                            <input name="contact_phone" id="form_name" class="form-control" placeholder="8:00 - 24:00"
                                   value="22222222222">
                            {{--<p>Использовать маскед инпут</p>--}}
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Почтовый ящик</label>
                            <input name="contact_email" id="form_name" class="form-control"
                                   placeholder="Email, если есть">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Сайт</label>
                            <input name="contact_site" id="form_name" class="form-control"
                                   placeholder="Ссылка на сайт, если есть">
                            <p>Возможно не публиковать на сайте, просто знать сайт ресторатора!</p>
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Вконтакте</label>
                            <input name="contact_vk" id="form_name" class="form-control"
                                   placeholder="Группа или публичная страница">
                        </div>

                        <div class="form-group">
                            <label for="form_name" class="form-label">Instagram</label>
                            <input name="contact_instagram" id="form_name" class="form-control"
                                   placeholder="Страничка в инстаграмме">
                        </div>
                    </div>
                </div>

                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Телефон менеджера</h4>
                        <p class="text-muted text-sm">Менеджер сможет работать с вашей страничкой!</p>
                        <small id="propertyTypeHelp" class="form-text text-muted">Можно оставить поле постым, тогда вся
                            работа ложиться на первый номер!
                        </small>
                    </div>
                    <div class="col-lg-7 ml-auto">

                        <div class="form-group">
                            <label for="form_name" class="form-label">Номер телефона</label>
                            <input name="contact_manager" id="form_name" class="form-control" placeholder="89377788850">
                            <p>Использовать маскед инпут</p>
                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" name="has_whatsapp" id="whatsapp" class="custom-control-input" value="true">

                                <label class="custom-control-label" for="whatsapp">Есть whatsapp-клиент на
                                    телефоне</label>
                            </div>

                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" value="has_telegram" id="telegram" class="custom-control-input" value="true">

                                <label class="custom-control-label" for="telegram">Есть telegramm-клиент на
                                    телефоне</label>
                            </div>
                        </div>

                    </div>
                </div>

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
                            Разместиться<i class="fa-chevron-right fa ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
@extends('base')

@section('content')
    <?php
    use Illuminate\Support\Facades\DB;

    $types = DB::table('types')->select('*')->get();
    $cities = DB::table('halls')->distinct()->select('state')->get();
    ?>

    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
        <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
             class="progress-bar"></div>
    </div>

    <section class="py-5">
        <div class="container">
            <p class="subtitle text-primary">Добавление заведения</p>
            <h1 class="h2 mb-5">Основная информация <span class="text-muted float-right">Шаг 1</span></h1>
            <form method="post" action="{{ route('accommodate.post_step2') }}">
                {{ csrf_field() }}
                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Контакты</h4>
                        <p class="text-muted text-sm">Контактные данные для входа в личный кабинет и полулчения новых заявок.</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group"></div>
                        <div class="form-group">
                            <label for="form_name" class="form-label">Как вас зовут?</label>
                            <input name="username" id="form_name" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="form_name" class="form-label">Номер телефона</label>
                            <input name="phone" id="phone" class="form-control">
                            <small id="propertyTypeHelp" class="form-text text-muted">Внимание, обязательно наличие <a
                                        href="https://web.whatsapp.com" target="_blank">WhatsApp</a> клиента на
                                телефоне! На него будет отправлена ссылка для подтверждения ваших данных, так же на него
                                будут отправляться новые заявки со страницы вашего заведения!
                            </small>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Поставьте галочку если у вас есть telegramm-клиент на
                                телефоне!</label>

                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" name="is_telegram" value="true" class="custom-control-input"
                                       id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">У меня есть
                                    telegramm-клиент на телефоне</label>
                            </div>
                            <small id="propertyTypeHelp" class="form-text text-muted">Внимание, если нет, то советуем
                                вам установить для дополнительных возможностей!
                            </small>


                        </div>


                    </div>
                </div>
                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>О заведении</h4>
                        <p class="text-muted text-sm">Заполните данные о вашем заведении.</p>
                    </div>
                    <div class="col-lg-7 ml-auto">

                        <!-- Street-->
                        <div class="form-group">
                            <label for="banket_name" class="form-label">Название заведения</label>
                            <input name="banket_name" id="banket_name" class="form-control">
                            <small id="propertyTypeHelp" class="form-text text-muted">Название вашего заведения без
                                каких-либо кавычек и других символов
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="form_type" class="form-label">Тип заведения</label>
                            <select name="hall_type" id="form_type" data-style="btn-selectpicker"
                                    aria-describedby="propertyTypeHelp" class="selectpicker form-control">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="form_type" class="form-label">Выберите район</label>
                            <select name="state" id="form_type" data-style="btn-selectpicker" title=""
                                    aria-describedby="propertyTypeHelp" class="selectpicker form-control">
                                @foreach($cities as $state)
                                <option value="{{ $state->state }}">{{ $state->state }}</option>
                                @endforeach
                            </select>

                        </div>

                        <!-- Street-->
                        <div class="form-group">
                            <label for="banket_name" class="form-label">Адрес заведения</label>
                            <input name="hall_address" id="banket_name" class="form-control">
                            <small id="propertyTypeHelp" class="form-text text-muted">Введите полный адрес вашего
                                заведения!
                            </small>
                            <small id="propertyTypeHelp" class="form-text text-muted">Наверное лучше всего использовать
                                кладр!?
                            </small>
                        </div>


                    </div>
                </div>

                <div class="row form-block flex-column flex-sm-row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="row form-block flex-column flex-sm-row">
                    <div class="col text-center text-sm-left">
                    </div>
                    <div class="col text-center text-sm-right">
{{--                        <a href="{{ route('accommodate.step2') }}" class="btn btn-primary px-3">Далее<i--}}
{{--                                    class="fa-chevron-right fa ml-2"></i></a>--}}
                        <button type="submit" class="btn btn-primary px-3">Далее <i
                                class="fa-chevron-right fa ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>


@endsection

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
                        <p class="text-muted text-sm">Контактные данные для входа в личный кабинет и полулчения новых
                            заявок.</p>
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
                        <div class="form-group" id="input-styling-address">
                            <label for="hall_address" class="form-label">Адрес заведения</label>

                            <input name="hall_address" id="hall_address" class="form-control">
                            <input type="hidden" name="lat" id="lat" >
                            <input type="hidden" name="lon" id="lon" >
                            <input type="hidden" name="state" id="state" >

                            <small id="propertyTypeHelp" class="form-text text-muted">Введите полный адрес вашего
                                заведения!
                            </small>
                            <small id="propertyTypeHelp" class="form-text text-muted">Наверное лучше всего использовать
                                кладр!?
                            </small>
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
                        {{--                        <a href="{{ route('accommodate.step2') }}" class="btn btn-primary px-3">Далее<i--}}
                        {{--                                    class="fa-chevron-right fa ml-2"></i></a>--}}
                        <button type="submit" class="btn btn-primary px-3">Далее <i
                                    class="fa-chevron-right fa ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <style>
        #input-styling-address input {
            display: inline-block;
            border: 1px solid #d9d9d9;
            width: 100%;
        }

        #input-styling-address input:focus, #input-styling-address input:active {
            outline: 0;
            border-color: #aaaaaa;
            background: #ffffff;
        }

        #input-styling-address .ap-nostyle-dropdown-menu {
            box-shadow: none;
            border: 1px solid #dadada;
            border-radius: 0;
            background: #fff;
            width: 100%;
        }

        .ap-dataset-places {
            font-size: 18px;
        }

        #input-styling-address .ap-nostyle-input-icon {
            display: block;
            position: absolute;
            background: none;
            border: none;
        }

        #input-styling-address .algolia-places-nostyle { width: 50%; }
        #input-styling-address .ap-nostyle-icon-pin { left: 5px;top: 10px; }
        #input-styling-address .ap-nostyle-icon-clear { right: 5px;top: 15px }
        #input-styling-address input:hover { border-color: silver; }
        #input-styling-address input::placeholder { color: #aaaaaa; }
        #input-styling-address .ap-nostyle-suggestion { border-bottom: 1px solid #efefef; }
    </style>


    <script src="/js/places.js"></script>
    <script>
        (function() {

            var placesAutocomplete = places({
                appId: 'pl64OO49VB0P',
                apiKey: '0a9468217ddf68a2b09c7a1f0840ceab',
                container: document.querySelector('#hall_address'),
                templates: {
                    value: function(suggestion) {
                        return suggestion.name;
                    }
                }
            }).configure({
                // type: 'city',
                type: 'address',
                aroundLatLngViaIP: false,
            });

            placesAutocomplete.on('change', e => {
                console.log(e.suggestion);
                $('#lat').val(e.suggestion.latlng.lat);
                $('#lon').val(e.suggestion.latlng.lng);
                $('#state').val(e.suggestion.administrative);
            });

        })();
    </script>

@endsection

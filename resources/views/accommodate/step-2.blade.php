@extends('base')

@section('content')

    <div style="height: 8px; top: 71px;" class="progress rounded-0 sticky-top">
        <div role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
             class="progress-bar"></div>
    </div>

    <section class="py-5">
        <div class="container">
            <p class="subtitle text-primary">Описание завдения</p>
            <h1 class="h2 mb-5"> Дополнительная информация по заведению <span
                        class="text-muted float-right">Шаг 2</span></h1>
            <form>
                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>О заведении</h4>
                        <p class="text-muted text-sm">Информация по заведению</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group"></div>
                        <div class="form-group">
                            <label for="form_name" class="form-label">Сколько рублей за персону, от?</label>
                            <input name="name" id="form_name" class="form-control">

                        </div>

                        <div class="form-group mb-5">
                            <label for="form_description" class="form-label">Описание вашего заведения, будет
                                опублкиовано на сайте</label>
                            <textarea name="name" id="form_description" rows="5" aria-describedby="descriptionHelp"
                                      class="form-control"></textarea>
                            <small id="descriptionHelp" class="form-text text-muted mt-2">Опишите ваше заведение как
                                можно подробнее, но не переборщите! Длинные тексты наскучивают, опишите только нужную
                                информацию для клиентов!
                            </small>
                            <br>
                            <div class="badge badge-primary text-wrap">
                                Внимание, категорически запрещена вставка любых текстовых данных со своего сайта, а так
                                же с любых порталов, где есть ваше заведение! Ваш рейтинг на сайте будет занижен, а
                                значит вы получите меньше обращений, чем ваши конкуренты!
                            </div>
                        </div>


                    </div>
                </div>


                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Возможности</h4>
                        <p class="text-muted text-sm">По некоторым параметрам из этого списка можно будет сортировать
                            ваше заведение на поиске.</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group">
                            <label class="form-label">Возможности</label>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_0" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_0"
                                               class="custom-control-label text-muted">Kitchen </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_1" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_1"
                                               class="custom-control-label text-muted">Shampoo </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_2" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_2"
                                               class="custom-control-label text-muted">Heating </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_3" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_3" class="custom-control-label text-muted">Air
                                            conditioning </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_4" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_4" class="custom-control-label text-muted">Washer </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_5" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_5" class="custom-control-label text-muted">Dryer </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_6" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_6" class="custom-control-label text-muted">Wifi </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_7" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_7"
                                               class="custom-control-label text-muted">Breakfast </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_8" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_8" class="custom-control-label text-muted">Indoor
                                            fireplace </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_9" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_9" class="custom-control-label text-muted">Buzzer/wireless
                                            intercom </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_10" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_10"
                                               class="custom-control-label text-muted">Doorman </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_11" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_11"
                                               class="custom-control-label text-muted">Hangers </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_12" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_12" class="custom-control-label text-muted">Iron </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_13" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_13" class="custom-control-label text-muted">Hair
                                            dryer </label>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="amenities_14" name="amenities[]"
                                               class="custom-control-input">
                                        <label for="amenities_14" class="custom-control-label text-muted">Laptop
                                            friendly workspace </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Количество залов</h4>
                        <p class="text-muted text-sm">Нажмите на знак + если в вашем заведении более одного зала, на
                            следующем шаге заполните всю информацию по каждому залу (Название / мини-описание /
                            вместимость / фото)</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="form-label">Сколько залов в вашем заведении</label>
                                <div class="d-flex align-items-center">
                                    <div class="btn btn-items btn-items-decrease">-</div>
                                    <input type="text" value="1" disabled class="form-control input-items">
                                    <div class="btn btn-items btn-items-increase">+</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Фотография для шапки вашего заведения</h4>
                        <p class="text-muted text-sm">Мы советуем загрузить изобаржение с шириной не менее 1920px по
                            ширине. Сделайте уникальное фото, или попросите знакомого фотографа о новых фотографиях!</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group">
                            <form id="demo-upload" action="https://demo.bootstrapious.com/upload" class="dropzone">
                                <div class="dz-message text-muted">
                                    <p>Перетащите фотографии в эту зону или выберите из файлового архива</p>

                                </div>
                            </form>
                        </div>
                        <div id="dropzoneTemplate" class="d-none">
                            <div class="dz-preview dz-file-preview">
                                <div class="dz-image"><img data-dz-thumbnail="" alt=""
                                                           src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/logo-square.svg">
                                </div>
                                <div class="dz-details">
                                    <div class="dz-filename"><span data-dz-name=""></span></div>
                                    <div data-dz-size="" class="dz-size"></div>
                                </div>
                                <div class="dz-progress"><span data-dz-uploadprogress="" class="dz-upload"></span></div>
                                <div class="dz-success-mark"><span class="dz-icon"><i class="fa-check fa"></i></span>
                                </div>
                                <div class="dz-error-mark"><span class="dz-icon"><i class="fa-times fa"></i></span>
                                </div>
                                <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row form-block">
                    <div class="col-lg-4">
                        <h4>Общие фотографии для заведения</h4>
                        <p class="text-muted text-sm">Сначала советуем выбрать 6 самых привлекательных фотографий.
                            Внимание, запрещено брать фотографии из интернета, будет занижен рейтинг вашего заведения на
                            портале!</p>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="form-group">
                            <form id="demo-upload" action="https://demo.bootstrapious.com/upload" class="dropzone">
                                <div class="dz-message text-muted">
                                    <p>Перетащите фотографии в эту зону или выберите из файлового архива</p>

                                </div>
                            </form>
                        </div>
                        <div id="dropzoneTemplate" class="d-none">
                            <div class="dz-preview dz-file-preview">
                                <div class="dz-image"><img data-dz-thumbnail="" alt=""
                                                           src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/logo-square.svg">
                                </div>
                                <div class="dz-details">
                                    <div class="dz-filename"><span data-dz-name=""></span></div>
                                    <div data-dz-size="" class="dz-size"></div>
                                </div>
                                <div class="dz-progress"><span data-dz-uploadprogress="" class="dz-upload"></span></div>
                                <div class="dz-success-mark"><span class="dz-icon"><i class="fa-check fa"></i></span>
                                </div>
                                <div class="dz-error-mark"><span class="dz-icon"><i class="fa-times fa"></i></span>
                                </div>
                                <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row form-block flex-column flex-sm-row">
                    <div class="col text-center text-sm-left">
                    </div>
                    <div class="col text-center text-sm-right"><a href="{{ route('accommodate.step3') }}" class="btn btn-primary px-3">

                            Далее<i class="fa-chevron-right fa ml-2"></i></a></div>
                </div>
            </form>
        </div>
    </section>

@endsection
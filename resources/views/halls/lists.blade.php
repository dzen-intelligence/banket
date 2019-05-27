@extends('base')

@section('content')

    <?php
    use Illuminate\Support\Facades\DB;

    $halltypes = DB::table('types')->select('*')->get();
    $additions = DB::table('additions')->select('*')->get();

    $cities = DB::table('halls')->distinct()->select('state')->get();
    $meta = DB::select("SELECT MIN(price_per_person) AS min_price_person, MAX(price_per_person) AS max_price_person, MIN(persons_count) AS min_persons, MAX(persons_count) AS max_persons FROM halls");


    $min_per_person = null;
    $max_per_person = null;
    $min_persons = null;
    $max_persons = null;

    foreach ($meta as $m) {
        $min_per_person = $m->min_price_person;
        $max_per_person = $m->max_price_person;
        $min_persons = $m->min_persons;
        $max_persons = $m->max_persons;
    }

    ?>

    <div class="container-fluid" id="app">
        <div class="row">
            <div class="col-lg-6 py-5 p-xl-5">
                <h1 class="text-serif mb-4">Банкетные залы, Казань</h1>
                <hr class="my-4">

                <form>

                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_search" class="form-label">Поиск по названию</label>
                            <div class="input-label-absolute input-label-absolute-right">
                                <div class="label-absolute"><i class="fa fa-search"></i></div>
                                <input type="search" name="search" v-model="search" @change="submitForm"
                                       placeholder="Например, Небеса" id="form_search"
                                       class="form-control pr-4">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_neighbourhood" class="form-label">Район</label>
                            <select name="state" v-model="state" @change="submitForm" id="form_neighbourhood" multiple
                                    data-style="btn-selectpicker"
                                    data-live-search="true" data-selected-text-format="count &gt; 1" title=""
                                    class="selectpicker form-control">
                                @foreach($cities->union('state') as $city)
                                    <option value="{{ $city->state }}">{{ $city->state }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_category" class="form-label">Тип заведения</label>
                            <select name="halltype" v-model="hallType" @change="submitForm" id="form_category" multiple
                                    data-style="btn-selectpicker"
                                    data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
                                @foreach($halltypes as $halltype)
                                    <option value="{{ $halltype->id }}">{{ $halltype->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <label class="form-label">Дополнительные параметры</label>
                            <ul class="list-inline mb-0">

                                @foreach($additions as $addition)
                                    <li class="list-inline-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="addition" v-model="additions"
                                                   @change="submitForm" id="addition_{{ $addition->id }}"
                                                   class="custom-control-input" value="{{ $addition->id }}">
                                            <label for="addition_{{ $addition->id }}"
                                                   class="custom-control-label">{{ $addition->name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-12 pb-4">
                            <div id="moreFilters" class="collapse">

                                <div class="row">

                                    <div class="col-xl-6 mb-4">
                                        <label class="form-label">За персону</label>
                                        <div id="slider-snap-perperson" class="text-primary"></div>
                                        <div class="nouislider-values">
                                            <div class="min">От <span id="slider-snap-perperson-value-from"></span> ₽
                                            </div>
                                            <div class="max">До <span id="slider-snap-perperson-value-to"></span> ₽
                                            </div>
                                        </div>

                                        <input type="text" name="person_minprice" v-model="person_min_price"
                                               @change="submitForm" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-perperson-input-from" value="{{ $min_per_person }}"><br>
                                        <input type="text" name="person_maxprice" v-model="person_max_price"
                                               @change="submitForm" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-perperson-input-to" value="{{ $max_per_person }}">
                                    </div>

                                    <div class="col-xl-6 mb-4">
                                        <label class="form-label">Персон</label>
                                        <div id="slider-snap-persons" class="text-primary"></div>
                                        <div class="nouislider-values">
                                            <div class="min">От <span id="slider-snap-persons-value-from"></span> ₽
                                            </div>
                                            <div class="max">До <span id="slider-snap-persons-value-to"></span> ₽</div>
                                        </div>
                                        <input type="text" name="pricefrom" class="form-control pr-4"
                                               id="slider-snap-persons-input-from" value="{{ $min_persons }}"><br>
                                        <input type="text" name="priceto" class="form-control pr-4"
                                               id="slider-snap-persons-input-to" value="{{ $max_persons }}">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <button type="submit" @click.prevent="submitForm" class="btn btn-primary"><i
                                        class="fas fa-filter mr-1"></i>Найти
                            </button>
                        </div>
                        <div class="col-6 mb-4 text-right">
                            <button type="button" data-toggle="collapse" data-target="#moreFilters"
                                    aria-expanded="false" aria-controls="moreFilters" data-expanded-text="Скрыть"
                                    data-collapsed-text="Дополнительно"
                                    class="btn btn-link btn-collapse text-secondary pl-0">Дополнительно
                            </button>
                        </div>
                    </div>
                </form>
                <hr class="my-4">
                <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-4">
                    <div class="mr-3">
                        <p class="mb-3 mb-md-0"><strong>${ halls.total > 0 ? halls.total : 0 }</strong> заведений найдено</p>
                    </div>
                    <div>
                        <label for="form_sort" class="form-label mr-2">Сортировать по</label>
                        <select name="sort" id="form_sort" data-style="btn-selectpicker" title="" class="selectpicker">
                            <option value="have_responses">Есть отзывы</option>
                            <option value="not_have_responses">Нет отзывов</option>
                            {{--<option value="sortBy_2">Новейший</option>--}}
                            {{--<option value="sortBy_3">Старейший</option>--}}
                            {{--<option value="sortBy_4">Закрыто</option>--}}
                        </select>
                    </div>
                </div>


                <div class="row" v-if="halls.total > 0">

                    <div v-for="hall in halls.data" v-key="hall.id" data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5">
                        <div class="card h-100 border-0 shadow">
                            <div v-bind:style="{ 'background-image': 'url(' + hall.preview_image + ')', 'min-height': '200px' }"
                                 class="card-img-top overflow-hidden dark-overlay bg-cover">
                                <a href="" class="tile-link"></a>
                                <div class="card-img-overlay-bottom z-index-20">
                                    <h4 class="text-white text-shadow">${ hall.title }</h4>
                                    <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                class="fa fa-star text-warning"></i><i
                                                class="fa fa-star text-warning"></i><i
                                                class="fa fa-star text-warning"></i><i
                                                class="fa fa-star text-gray-300"> </i>
                                    </p>
                                </div>
                                <div class="card-img-overlay-top d-flex justify-content-between align-items-center">

                                    <div class="badge badge-transparent badge-pill px-3 py-2">${ hall.types.name }</div>
                                    <a href="javascript:void()"
                                       class="card-fav-icon position-relative z-index-40">
                                        <svg class="svg-icon text-white">
                                            <use xlink:href="#heart-1"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-sm text-muted mb-3">${ hall.description | truncate(100)}</p>
                                <p class="text-sm text-muted text-uppercase mb-1"><a href="#" class="text-dark">${ hall.state}</a>
                                </p>
                                <p class="text-sm mb-0"><a href="#" class="mr-1">${ hall.types.name }</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div v-else>
                    <h2 class="text-serif mb-4">Заведений не найдено</h2>
                </div>
                <!-- Pagination -->


            </div>
            <div class="col-lg-6 map-side-lg pr-lg-0">
                <div id="categorySideMap" class="map-full"></div>
            </div>
        </div>
    </div>

    <script src="/unpkg.com/leaflet1.3.4/dist/leaflet.js"></script>
    <script src="/js/map-category.js"></script>
    <script>
        $(document).ready(function () {

            createListingsMap({
                mapId: 'categorySideMap',
                // jsonFile: '/js/restaurants-geojson.json'
                jsonFile: '/halls/mapdata'
            });
        });
    </script>

    <!-- Price  Slider-->
    <script src="/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/nouislider/nouislider.min.js"></script>
    <script>
                {{-- Слайдер сумма за персону--}}
        var snapSlider = document.getElementById('slider-snap-perperson');

        noUiSlider.create(snapSlider, {
            start: [{{ $min_per_person }}, {{ $max_per_person }}],
            snap: false,
            connect: true,
            step: 1,
            range: {
                'min': {{ $min_per_person }},
                'max': {{ $max_per_person }}
            },
            format: {
                to: function (value) {
                    return parseInt(value);
                },
                from: function (value) {
                    return parseInt(value);
                }
            }
        });
        var snapValues1 = [
            document.getElementById('slider-snap-perperson-value-from'),
            document.getElementById('slider-snap-perperson-value-to')
        ];
        var inputValues1 = [
            document.getElementById('slider-snap-perperson-input-from'),
            document.getElementById('slider-snap-perperson-input-to')
        ];
        snapSlider.noUiSlider.on('update', function (values, handle) {
            snapValues1[handle].innerHTML = values[handle];
            inputValues1[handle].value = values[handle];
        });


        // Слайдер за количество персон
        var snapSliderPersons = document.getElementById('slider-snap-persons');

        noUiSlider.create(snapSliderPersons, {
            start: [{{ $min_persons }}, {{ $max_persons }}],
            snap: false,
            connect: true,
            step: 1,
            range: {
                'min': {{ $min_persons }},
                'max': {{ $max_persons }}
            },
            format: {
                to: function (value) {
                    return parseInt(value);
                },
                from: function (value) {
                    return parseInt(value);
                }
            }
        });
        var snapValues = [
            document.getElementById('slider-snap-persons-value-from'),
            document.getElementById('slider-snap-persons-value-to')
        ];
        var inputValues = [
            document.getElementById('slider-snap-persons-input-from'),
            document.getElementById('slider-snap-persons-input-to')
        ];
        snapSliderPersons.noUiSlider.on('update', function (values, handle) {
            snapValues[handle].innerHTML = values[handle];
            inputValues[handle].value = values[handle];
        });
    </script>
    <script src="/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/nouislider/nouislider.min.js"></script>

@endsection

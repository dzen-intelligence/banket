@extends('base')

@include('partials.navbar')

@section('content')

    <?php
    use Illuminate\Support\Facades\DB;

    $halltypes = DB::table('types')->select('*')->get();
    $additions = DB::table('additions')->select('*')->get();
//    $halls = App\Models\Halls::query()->with('types', 'additions')->get();
    $halls = App\Models\Halls::query()->with('types', 'additions')->paginate(4);

    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 py-5 p-xl-5">
                <h1 class="text-serif mb-4">Банкетные залы, Казань</h1>
                <hr class="my-4">
                <form action="#">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_search" class="form-label">Поиск по названию</label>
                            <div class="input-label-absolute input-label-absolute-right">
                                <div class="label-absolute"><i class="fa fa-search"></i></div>
                                <input type="search" name="search" placeholder="Например, Небеса" id="form_search"
                                       class="form-control pr-4">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_neighbourhood" class="form-label">Район</label>
                            <select name="neighbourhood" id="form_neighbourhood" multiple data-style="btn-selectpicker"
                                    data-live-search="true" data-selected-text-format="count &gt; 1" title=""
                                    class="selectpicker form-control">
                                <option value="neighbourhood_0">Советский</option>
                                <option value="neighbourhood_1">Приволжский</option>
                                <option value="neighbourhood_2">Авиастроительный</option>
                                <option value="neighbourhood_3">Вахитовский</option>
                                <option value="neighbourhood_4">Кировский</option>
                                <option value="neighbourhood_5">Московский</option>
                                <option value="neighbourhood_6">Ново-Савиновский</option>


                            </select>
                        </div>


                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_category" class="form-label">Тип заведения</label>
                            <select name="halltype" id="form_category" multiple data-style="btn-selectpicker"
                                    data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
                                {{--<option value="category_0">Банкетный зал</option>--}}
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
                                            <input type="checkbox" id="addition_{{ $addition->id }}" name="additions[]"
                                                   class="custom-control-input">
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
                                        <div id="slider-snap" class="text-primary"></div>
                                        <div class="nouislider-values">
                                            <div class="min">От <span id="slider-snap-value-from"></span> ₽</div>
                                            <div class="max">До <span id="slider-snap-value-to"></span> ₽</div>
                                        </div>

                                        <input type="text" name="pricefrom" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-input-from" value="40"><br>
                                        <input type="text" name="priceto" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-input-to" value="110">
                                    </div>


                                    <div class="col-xl-6 mb-4">
                                        <label class="form-label">Персон</label>
                                        <div id="slider-snap" class="text-primary"></div>
                                        <div class="nouislider-values">
                                            <div class="min">От <span id="slider-snap-value-from"></span> ₽</div>
                                            <div class="max">До <span id="slider-snap-value-to"></span> ₽</div>
                                        </div>
                                        <input type="text" name="pricefrom" class="form-control pr-4"
                                               id="slider-snap-input-from" value="40"><br>
                                        <input type="text" name="priceto" class="form-control pr-4"
                                               id="slider-snap-input-to" value="110">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-filter mr-1"></i>Найти
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
                        <p class="mb-3 mb-md-0"><strong>12</strong> заведений найдено</p>
                    </div>
                    <div>
                        <label for="form_sort" class="form-label mr-2">Сортировать по</label>
                        <select name="sort" id="form_sort" data-style="btn-selectpicker" title="" class="selectpicker">
                            <option value="sortBy_0">Самый популярный</option>
                            <option value="sortBy_1">Хорошие отзывы</option>
                            <option value="sortBy_2">Новейший</option>
                            <option value="sortBy_3">Старейший</option>
                            <option value="sortBy_4">Закрыто</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                @foreach($halls as $hall)
                    <!-- venue item-->
                        <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url({{ url()->asset('/template/d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1430931071372-38127bd472b8.jpg') }}); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.php" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">{{ $hall->title }}</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-gray-300"> </i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">

                                        <div class="badge badge-transparent badge-pill px-3 py-2">{{ $hall->types['name'] }}</div>
                                        <a href="javascript:void()" class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
{{--                                    <p class="text-sm text-muted mb-3">{{   $hall->description }}</p>--}}
                                    <p class="text-sm text-muted mb-3">{{ \Illuminate\Support\Str::limit($hall->description, 150)  }}</p>
                                    <p class="text-sm text-muted text-uppercase mb-1"><a href="#" class="text-dark">Казань,
                                            Уртак, Д.1</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">{{ $hall->types['name'] }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- Pagination -->

                {{ $halls->links() }}

            </div>
            <div class="col-lg-6 map-side-lg pr-lg-0">
                <div id="categorySideMap" class="map-full"></div>
            </div>
        </div>
    </div>


    <script src="{{ url()->asset('/template/unpkg.com/leaflet1.3.4/dist/leaflet.js') }}"></script>
    <script src="{{ url()->asset('/template/js/map-category.js') }}"></script>
    <script>
        createListingsMap({
            mapId: 'categorySideMap',
            jsonFile: '{{ url()->asset('/template/js/restaurants-geojson.json') }}'
        });
    </script>

    <!-- Price  Slider-->
    <script src="{{ url()->asset('/template/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/nouislider/nouislider.min.js') }}"></script>
    <script>
        var snapSlider = document.getElementById('slider-snap');

        noUiSlider.create(snapSlider, {
            start: [40, 110],
            snap: false,
            connect: true,
            step: 1,
            range: {
                'min': 40,
                'max': 110
            }
        });
        var snapValues = [
            document.getElementById('slider-snap-value-from'),
            document.getElementById('slider-snap-value-to')
        ];
        var inputValues = [
            document.getElementById('slider-snap-input-from'),
            document.getElementById('slider-snap-input-to')
        ];
        snapSlider.noUiSlider.on('update', function (values, handle) {
            snapValues[handle].innerHTML = values[handle];
            inputValues[handle].value = values[handle];
        });
    </script>
    <script src="{{ url()->asset('/template/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/nouislider/nouislider.min.js') }}"></script>

@endsection
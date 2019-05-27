<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 py-5 p-xl-5">
                <h1 class="text-serif mb-4">Банкетные залы, Казань</h1>
                <hr class="my-4">

                <form action="/" method="get">

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
                            <select name="state" id="form_neighbourhood" multiple data-style="btn-selectpicker"
                                    data-live-search="true" data-selected-text-format="count &gt; 1" title=""
                                    class="selectpicker form-control">
                                <!--цикл-->
                                <option value="вывести имя района">вывести район</option>
                                <option value="вывести имя района">вывести район</option>
                                <!--конец цикла-->

                            </select>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <label for="form_category" class="form-label">Тип заведения</label>
                            <select name="halltype" id="form_category" multiple data-style="btn-selectpicker"
                                    data-selected-text-format="count &gt; 1" title="" class="selectpicker form-control">
                                <!--в цикле вывести типы заведения-->
                                <option value="вывести ид типа заведения">вывести имя цикла</option>
                                <!--конец цикла-->
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <label class="form-label">Дополнительные параметры</label>
                            <ul class="list-inline mb-0">

                                <!--цикл вывести дополнения-->
                                <li class="list-inline-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="addition[]" id="addition_"
                                               class="custom-control-input" value="ид дополнения">
                                        <label for="addition_"
                                               class="custom-control-label">вывести имя дополнения</label>
                                    </div>
                                </li>
                                <!--конец цикла-->
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

                                        <input type="text" name="person_minprice" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-perperson-input-from" value="мин пер цена"><br>
                                        <input type="text" name="person_maxprice" class="form-control mb-2 mr-sm-2"
                                               id="slider-snap-perperson-input-to" value="макс пер персон">
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
                                               id="slider-snap-persons-input-from" value="мин персон"><br>
                                        <input type="text" name="priceto" class="form-control pr-4"
                                               id="slider-snap-persons-input-to" value="макс персон">
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
                        <p class="mb-3 mb-md-0"><strong>вывести количество заведений</strong> заведений найдено</p>
                    </div>
                    <div>
                        <label for="form_sort" class="form-label mr-2">Сортировать по</label>
                        <select name="sort" id="form_sort" data-style="btn-selectpicker" title="" class="selectpicker">
                            <option value="have_responses">Есть отзывы</option>
                            <option value="not_have_responses">Нет отзывов</option>
                        </select>
                    </div>
                </div>

                <div class="row">

                    <!--Условие если есть залы-->

                    <!--В цикле перебрать залы-->
                    <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 mb-5">
                        <div class="card h-100 border-0 shadow">
                            <div style="background-image: url( ... ); min-height: 200px;"
                                 class="card-img-top overflow-hidden dark-overlay bg-cover">
                                <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                    href="сгенерировать ссылку"
                                    class="tile-link"></a>
                                <div class="card-img-overlay-bottom z-index-20">
                                    <h4 class="text-white text-shadow">заголовок заведения</h4>
                                    <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                            class="fa fa-star text-warning"></i><i
                                            class="fa fa-star text-warning"></i><i
                                            class="fa fa-star text-warning"></i><i
                                            class="fa fa-star text-gray-300"> </i>
                                    </p>
                                </div>
                                <div class="card-img-overlay-top d-flex justify-content-between align-items-center">

                                    <div class="badge badge-transparent badge-pill px-3 py-2">вывести имя типа заведения</div>
                                    <a href="javascript:void()"
                                       class="card-fav-icon position-relative z-index-40">
                                        <svg class="svg-icon text-white">
                                            <use xlink:href="#heart-1"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-sm text-muted mb-3">вывести описание заведения</p>
                                <p class="text-sm text-muted text-uppercase mb-1"><a href="#"
                                                                                     class="text-dark">вывести район</a>
                                </p>
                                <p class="text-sm mb-0"><a href="#" class="mr-1">вывести тип заведения</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--конец цикла-->

                    <!--Else-->
                    <h2 class="text-serif mb-4">Заведений не найдено</h2>
                    <!--конец условия-->

                </div>
                <!-- Pagination -->

                <!--Сделать пагинацию-->

            </div>
            <div class="col-lg-6 map-side-lg pr-lg-0">
                <div id="categorySideMap" class="map-full"></div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
}
</script>

<style scoped>

</style>
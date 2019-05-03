@extends('base')


@section('content')

    <!-- Hero Section-->
    <section
            style="background-image: url({{ $hall->preview_image }});"
            class="pt-7 pb-5 d-flex align-items-end dark-overlay bg-cover">
        <div class="container overlay-content">
            <div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
                <div class="text-white mb-4 mb-lg-0">
                    <div class="badge badge-pill badge-transparent px-3 py-2 mb-4">{{ $hall->types['name']  }}</div>
                    <h1 class="text-shadow verified">{{ $hall->title }}</h1>
                    <p><i class="fa-map-marker-alt fas mr-2"></i>{{ $hall->state  }}</p>
                    <p class="mb-0 d-flex align-items-center"><i class="fa fa-xs fa-star text-primary"></i><i
                                class="fa fa-xs fa-star text-primary"></i><i
                                class="fa fa-xs fa-star text-primary"></i><i
                                class="fa fa-xs fa-star text-primary"></i><i
                                class="fa fa-xs fa-star text-gray-200 mr-4"> </i>8 Отзывов</p>
                </div>
                <div class="calltoactions"><a href="#leaveReview" onclick="$('#leaveReview').collapse('show')"
                                              data-smooth-scroll class="btn btn-primary">Оставить отзыв</a></div>
            </div>
        </div>
    </section>
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- About Listing-->
                    <div class="text-block">
                        <h3 class="mb-3">О нашем заведении</h3>
                        <p class="text-muted">{{ $hall->description }}</p>
                    </div>
                    <div class="text-block">
                        <!-- Listing Location-->
                        <h3 class="mb-4">Мы на карте</h3>
                        <div class="map-wrapper-300 mb-3">
                            <div id="categorySideMap" class="map-full"></div>
                        </div>
                    </div>
                    <div class="text-block">
                        <!-- Gallery-->
                        <h3 class="mb-4">Галлерея</h3>
                        <div class="row gallery ml-n1 mr-n1">
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1515164783716-8e6920f3e77c.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1515164783716-8e6920f3e77c.jpg"
                                            alt="..." class="img-fluid"></a></div>
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1466978913421-dad2ebd01d17.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1466978913421-dad2ebd01d17.jpg"
                                            alt="..." class="img-fluid"></a></div>
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1477763858572-cda7deaa9bc5.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1477763858572-cda7deaa9bc5.jpg"
                                            alt="..." class="img-fluid"></a></div>
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1505275350441-83dcda8eeef5.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1505275350441-83dcda8eeef5.jpg"
                                            alt="..." class="img-fluid"></a></div>
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1508766917616-d22f3f1eea14.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1508766917616-d22f3f1eea14.jpg"
                                            alt="..." class="img-fluid"></a></div>
                            <div class="col-lg-4 col-6 px-1 mb-2"><a
                                        href="img/photo/restaurant-1430931071372-38127bd472b8.jpg"><img
                                            src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1430931071372-38127bd472b8.jpg"
                                            alt="..." class="img-fluid"></a></div>
                        </div>
                    </div>

                    <!-- Amenities-->
                    @if( count($hall->additions) > 0  )
                        <div class="text-block">
                            <h3 class="mb-4">Дополнения</h3>
                            <ul class="amenities-list list-inline">
                                @foreach($hall->additions as $addition)
                                    <li class="list-inline-item mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-circle bg-secondary mr-2"><i class="fa fa-check"></i></div>
                                            <span>{{ $addition->name }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="text-block">
                        <p class="subtitle text-sm text-primary">Отзывы </p>
                        <h5 class="mb-4">Отзывы о нас </h5>
                        <div class="media d-block d-sm-flex review">
                            <div class="text-md-center mr-4 mr-xl-5"><img
                                        src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/avatar/avatar-8.jpg"
                                        alt="Padmé Amidala" class="d-block avatar avatar-xl p-2 mb-2"><span
                                        class="text-uppercase text-muted text-sm">Dec 2018</span></div>
                            <div class="media-body">
                                <h6 class="mt-2 mb-1">Padmé Amidala</h6>
                                <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i>
                                </div>
                                <p class="text-muted text-sm">One morning, when Gregor Samsa woke from troubled dreams,
                                    he found himself transformed in his bed into a horrible vermin. He lay on his
                                    armour-like back, and if he lifted his head a little he could see his brown belly,
                                    slightly domed and divided by arches into stiff sections </p>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex review">
                            <div class="text-md-center mr-4 mr-xl-5"><img
                                        src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/avatar/avatar-2.jpg"
                                        alt="Luke Skywalker" class="d-block avatar avatar-xl p-2 mb-2"><span
                                        class="text-uppercase text-muted text-sm">Dec 2018</span></div>
                            <div class="media-body">
                                <h6 class="mt-2 mb-1">Luke Skywalker</h6>
                                <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-gray-200"></i>
                                </div>
                                <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready
                                    to slide off any moment. His many legs, pitifully thin compared with the size of the
                                    rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot;
                                    he thought. It wasn't a dream. </p>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex review">
                            <div class="text-md-center mr-4 mr-xl-5"><img
                                        src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/avatar/avatar-3.jpg"
                                        alt="Princess Leia" class="d-block avatar avatar-xl p-2 mb-2"><span
                                        class="text-uppercase text-muted text-sm">Dec 2018</span></div>
                            <div class="media-body">
                                <h6 class="mt-2 mb-1">Princess Leia</h6>
                                <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-gray-200"></i><i
                                            class="fa fa-xs fa-star text-gray-200"></i>
                                </div>
                                <p class="text-muted text-sm">His room, a proper human room although a little too small,
                                    lay peacefully between its four familiar walls. A collection of textile samples lay
                                    spread out on the table. </p>
                            </div>
                        </div>
                        <div class="media d-block d-sm-flex review">
                            <div class="text-md-center mr-4 mr-xl-5"><img
                                        src="./d19m59y37dris4.cloudfront.net/directory/1-1/img/avatar/avatar-4.jpg"
                                        alt="Jabba Hut" class="d-block avatar avatar-xl p-2 mb-2"><span
                                        class="text-uppercase text-muted text-sm">Dec 2018</span></div>
                            <div class="media-body">
                                <h6 class="mt-2 mb-1">Jabba Hut</h6>
                                <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i>
                                </div>
                                <p class="text-muted text-sm">Samsa was a travelling salesman - and above it there hung
                                    a picture that he had recently cut out of an illustrated magazine and housed in a
                                    nice, gilded frame. </p>
                            </div>
                        </div>
                        <div class="py-5">
                            <button type="button" data-toggle="collapse" data-target="#leaveReview"
                                    aria-expanded="false" aria-controls="leaveReview" class="btn btn-outline-primary">
                                Оставить отзыв
                            </button>
                            <div id="leaveReview" class="collapse mt-4">
                                <h5 class="mb-4">Оставить отзыв</h5>
                                <form id="contact-form" method="get" action="#" class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Ваше имя *</label>
                                                <input type="text" name="name" id="name" placeholder="Как вас зовут?"
                                                       required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="rating" class="form-label">Рейтинг *</label>
                                                <select name="rating" id="rating" class="custom-select focus-shadow-0">
                                                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                                                    <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                                                    <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                                                    <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                                                    <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Ваш телефон *</label>
                                        <input type="email" name="email" id="email" placeholder="Введите ваш телефон"
                                               required="required" class="form-control">
                                        <small id="propertyTypeHelp" class="form-text text-muted">На вацап отправляем
                                            ссылку или код для подтверждения
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="review" class="form-label">Ваш отзыв *</label>
                                        <textarea rows="4" name="review" id="review"
                                                  placeholder="Опишите данное заведение" required="required"
                                                  class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Разместить отзыв</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pl-xl-4">


                        <div class="card border-0 shadow mb-5">
                            <div class="card-header bg-gray-100 py-4 border-0">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="subtitle text-sm text-primary">Оставьте заявку</p>
                                        <h4 class="mb-0">Со скидкой 15%</h4>
                                    </div>
                                    <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted">
                                        <use xlink:href="#fountain-pen-1"></use>
                                    </svg>
                                </div>
                            </div>


                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Как вас зовут?</label>
                                        <input type="name" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Имя">
                                        <!--  <small id="emailHelp" class="form-text text-muted"></small> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ваш телефон</label>
                                        <input type="phone" class="form-control" id="phone" placeholder="Телефон">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Я согласен на обработку
                                            персональных ланных</label>
                                    </div>
                                </form>
                                <div class="text-center"><a href="#" class="btn btn-outline-primary btn-block"> <i
                                                class="far fa-paper-plane mr-2"></i>Оставить заявку</a></div>
                            </div>
                        </div>


                        <!-- Opening Hours      -->
                        <div class="card border-0 shadow mb-5">
                            <div class="card-header bg-gray-100 py-4 border-0">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="subtitle text-sm text-primary">ВРЕМЯ РАБОТЫ</p>
                                        <h4 class="mb-0">МИЛОРД</h4>
                                    </div>
                                    <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted">
                                        <use xlink:href="#wall-clock-1"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table text-sm mb-0">
                                    @if(!empty($hall->timeworks->monday))
                                    <tr>
                                        <th class="pl-0 border-0">Понедельник</th>
                                        <td class="pr-0 text-right border-0">{{ $hall->timeworks->monday }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->tuesday))
                                    <tr>
                                        <th class="pl-0">Вторник</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->tuesday }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->wednesday))
                                    <tr>
                                        <th class="pl-0">Среда</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->wednesday }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->thursday))
                                    <tr>
                                        <th class="pl-0">Четверг</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->thursday }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->friday))
                                    <tr>
                                        <th class="pl-0">Пятница</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->friday  }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->saturday))
                                    <tr>
                                        <th class="pl-0">Суббота</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->saturday  }}</td>
                                    </tr>
                                    @endif

                                    @if(!empty($hall->timeworks->sunday))
                                    <tr>
                                        <th class="pl-0">Воскресенье</th>
                                        <td class="pr-0 text-right">{{ $hall->timeworks->sunday }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                        <!-- Contact-->

                        <div class="card border-0 shadow mb-5">
                            <div class="card-header bg-gray-100 py-4 border-0">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="subtitle text-sm text-primary">Всегда на связи</p>
                                        <h4 class="mb-0">Контакты</h4>
                                    </div>
                                    <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted">
                                        <use xlink:href="#fountain-pen-1"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="list-unstyled mb-4">
                                        @if(!empty($hall->contacts->phone))
                                            <li class="mb-2"><a href="#"
                                                                class="text-gray-00 text-sm ext-decoration-none"><i
                                                            class="fa fa-phone mr-3"></i><span
                                                            class="text-muted">{{ $hall->contacts->phone }}</span></a>
                                            </li>
                                        @endif

                                        @if(!empty($hall->contacts->email))
                                            <li class="mb-2"><a href="#" class=" text-sm text-decoration-none"><i
                                                            class="fa fa-envelope mr-3"></i><span
                                                            class="text-muted">{{ $hall->contacts->email  }}</span></a>
                                            </li>
                                        @endif

                                        @if(!empty($hall->contacts->site))
                                            <li class="mb-2"><a href="#" class=" text-sm text-decoration-none"><i
                                                            class="fa fa-globe mr-3"></i><span
                                                            class="text-muted">{{ $hall->contacts->site }}</span></a>
                                            </li>
                                        @endif

                                        @if(!empty($hall->contacts->vkontakte))
                                            <li class="mb-2"><a href="{{ $hall->contacts->vkontakte }}"
                                                                class=" text-sm text-decoration-none"><i
                                                            class="fab fa-vk mr-3"></i><span
                                                            class="text-muted">Вконтакте</span></a>
                                            </li>
                                        @endif

                                        @if(!empty($hall->contacts->instagram))
                                            <li class="mb-2"><a href="{{ $hall->contacts->instagram  }}"
                                                                class=" text-sm text-decoration-none"><i
                                                            class="fab fa-instagram mr-3"></i><span
                                                            class="text-muted">Instagram</span></a></li>
                                        @endif
                                </ul>
                                <div class="text-center"><a href="#" class="btn btn-outline-primary btn-block"> <i
                                                class="far fa-paper-plane mr-2"></i>Вам перезвонить?</a></div>
                            </div>
                        </div>


                        <!--  <div class="text-center">
                           <p><a href="#" class="text-secondary"> <i class="fa fa-heart"></i> Сохранить в закладки</a></p><span>79 клиентам нравится Милорд </span>
                         </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-6 bg-gray-100">
        <div class="container">
            <h5 class="mb-0">Банкетные залы</h5>
            <p class="subtitle text-sm text-primary mb-4">Рядом с нашим заведением </p>
            <!-- Slider main container-->
            <div class="swiper-container swiper-container-mx-negative items-slider">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper pb-5">
                    <!-- Slides-->
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1430931071372-38127bd472b8.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Blue Hill</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-gray-300"> </i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Restaurants</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Cupidatat excepteur non dolore laborum et quis
                                        nostrud veniam dolore deserunt. Pariatur dolore ut in elit id nulla. Irur...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#"
                                                                                                       class="mr-1">Contemporary</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e322f3375db4d89128" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1436018626274-89acd1d6ec9d.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Plutorque</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Restaurant</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Proident irure eiusmod velit veniam consectetur
                                        id minim irure et nostrud mollit magna velit. Commodo amet proident aliq...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Restaurant,</a><a href="#"
                                                                                                       class="mr-1">Fusion</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e3a31e62979bf147c9" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1466978913421-dad2ebd01d17.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Junipoor</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Music club</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Lorem amet ex duis in et fugiat consectetur
                                        laborum eiusmod labore. Quis cupidatat et do dolor in in magna. Eu sit quis
                                        ...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Music,</a><a href="#" class="mr-1">Techno,</a><a
                                                href="#" class="mr-1">House</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e3503eb77d487e8082" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1477763858572-cda7deaa9bc5.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Musix</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-gray-300"> </i><i
                                                    class="fa fa-star text-gray-300"> </i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Music club</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Deserunt eiusmod Lorem proident consequat elit
                                        culpa laboris ea cupidatat. Consequat dolore proident ipsum qui sint enim...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Music,</a><a href="#" class="mr-1">Club,</a><a
                                                href="#" class="mr-1">Rock</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e39aa2eed0626e485d" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1504087697492-238a6bf49ce8.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Prosure</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Restaurant</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Cillum sunt reprehenderit ea non irure veniam
                                        dolore commodo labore fugiat est consequat velit. Cupidatat nisi qui ad
                                        si...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Nisi,</a><a href="#" class="mr-1">Ex,</a><a
                                                href="#" class="mr-1">Eiusmod</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto px-2">
                        <!-- venue item-->
                        <div data-marker-id="59c0c8e39aa2edasd626e485d" class="w-100 h-100">
                            <div class="card h-100 border-0 shadow">
                                <div style="background-image: url(./d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/restaurant-1505275350441-83dcda8eeef5.jpg); min-height: 200px;"
                                     class="card-img-top overflow-hidden dark-overlay bg-cover">
                                    <!--img.img-fluid(src="#{imgBasePath}#{val.image}" alt="#{val.name}")--><a
                                            href="detail.html" class="tile-link"></a>
                                    <div class="card-img-overlay-bottom z-index-20">
                                        <h4 class="text-white text-shadow">Take That</h4>
                                        <p class="mb-2 text-xs"><i class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-warning"></i><i
                                                    class="fa fa-star text-gray-300"> </i>
                                        </p>
                                    </div>
                                    <div class="card-img-overlay-top d-flex justify-content-between align-items-center">
                                        <div class="badge badge-transparent badge-pill px-3 py-2">Café</div>
                                        <a href="javascript: void();"
                                           class="card-fav-icon position-relative z-index-40">
                                            <svg class="svg-icon text-white">
                                                <use xlink:href="#heart-1"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-sm text-muted mb-3"> Cillum sunt reprehenderit ea non irure veniam
                                        dolore commodo labore fugiat est consequat velit. Cupidatat nisi qui ad
                                        si...</p>
                                    <p class="text-sm text-muted text-uppercase mb-1">By <a href="#" class="text-dark">Matt
                                            Damon</a></p>
                                    <p class="text-sm mb-0"><a href="#" class="mr-1">Nisi,</a><a href="#" class="mr-1">Ex,</a><a
                                                href="#" class="mr-1">Eiusmod</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination-->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

@endsection

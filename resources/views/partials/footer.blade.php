<!-- Footer-->
<footer class="position-relative z-index-10">
    <!-- Main block - menus, subscribe form-->
    <div class="py-6 bg-gray-200 text-muted">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="font-weight-bold text-uppercase text-dark mb-3">Banket116.ru</div>
                    <p>Пожалуй, лучший портал <br> для <b>организации банкета и торжеств</b></p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" target="_blank" title="Мы в Instagram"
                                                        class="text-muted text-hover-primary"><i
                                        class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="Мы на youtube"
                                                        class="text-muted text-hover-primary"><i
                                        class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h6 class="text-uppercase text-dark mb-3">Для партнеров</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h6 class="text-uppercase text-dark mb-3">Для залов</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                        <li><a href="#" class="text-muted">Ссылка <span class="badge badge-info ml-1">Новое</span> </a>
                        </li>
                        <li><a href="#" class="text-muted">Ссылка </a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-uppercase text-dark mb-3">Станьте партнером Banket116.ru</h6>
                    <p class="mb-3"> В другом регионе России!</p>
                    <form action="#" id="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="phone" placeholder="Ваш телефон" aria-label="Введите ваш телефон"
                                   class="form-control bg-transparent border-dark border-right-0">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-dark border-left-0"><i
                                            class="fa fa-paper-plane text-lg"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright section of the footer-->
    <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="text-sm mb-md-0">&copy; 2019 banket116.ru Все права защищены!</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                        <li class="list-inline-item"><img
                                    src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/visa.svg" alt="..."
                                    class="w-2rem"></li>
                        <li class="list-inline-item"><img
                                    src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/mastercard.svg"
                                    alt="..." class="w-2rem"></li>
                        <li class="list-inline-item"><img
                                    src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/paypal.svg" alt="..."
                                    class="w-2rem"></li>
                        <li class="list-inline-item"><img
                                    src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/western-union.svg"
                                    alt="..." class="w-2rem"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer end-->
<!-- JavaScript files-->
<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET.html", path, true);
        ajax.send();
        ajax.onload = function (e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }

    // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
    // use your own URL in production, please :)
    // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
    //- injectSvgSprite('icons/orion-svg-sprite.svg');
    injectSvgSprite('icons/orion-svg-sprite.svg');

</script>

<!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- Magnific Popup - Lightbox for the gallery-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/magnific-popup/jquery.magnific-popup.min.js') }}></script>
<!-- Smooth scroll-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}></script>
<!-- Bootstrap Select-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/bootstrap-select/js/bootstrap-select.min.js') }}></script>
<!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/object-fit-images/ofi.min.js') }}></script>
<!-- Swiper Carousel                       -->
<script src={{ url()->asset('/cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js') }}></script>
<script>var basePath = ''</script>
<!-- Main Theme JS file    -->
<script src={{ url()->asset('/js/theme.js') }}></script>
<script src={{ url()->asset('/unpkg.com/leaflet1.3.4/dist/leaflet.js') }}></script>
<script src={{ url()->asset('/js/map-detail.js') }}></script>

<!-- Dropzone.js-->
<script src={{ url()->asset('/d19m59y37dris4.cloudfront.net/directory/1-1/vendor/dropzone/dropzone.js') }}></script>
<!-- Dropzone Init-->
<script src={{ url()->asset('/js/forms-dropzone.js') }}></script>
<script src="{{ url()->asset('/js/app.js') }}"></script>

</body>
</html>
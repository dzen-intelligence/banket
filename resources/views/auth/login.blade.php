@extends('base')

@section('content')
    <body>

    <div class="container-fluid px-3">
        <div class="row min-vh-100">
            <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
                <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
                    <div class="mb-5"><img src="https://d19m59y37dris4.cloudfront.net/directory/1-1/img/logo-square.svg"
                                           alt="..." style="max-width: 4rem;" class="img-fluid mb-3">
                        <h2>Добро пожаловать</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="phone" class="form-label">Номер телефона</label>
                            <input name="phone" id="phone" type="text" placeholder="8 800 000 00 00"
                                   autocomplete="off" required data-msg="Пожалуйста, введите ваш телефон"
                                   class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col">
                                    <label for="password" class="form-label">Пароль</label>
                                </div>
                                <!-- <div class="col-auto"><a href="#" class="form-text small">Забыли пароль?</a></div> -->
                            </div>
                            <input name="password" id="password" placeholder="Пароль" type="password" required
                                   data-msg="Введите ваш пароль" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-checkbox">
                                <input  type="checkbox" class="custom-control-input" id="loginRemember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="loginRemember" class="custom-control-label text-muted"> <span
                                            class="text-sm">Запомнить пароль на 30 дней</span></label>
                            </div>
                        </div>
                        <!-- Submit-->
                        <button class="btn btn-lg btn-block btn-primary" type="submit">Войти</button>
                        <hr data-content="ИЛИ" class="my-3 hr-text letter-spacing-2">
                        <button class="btn btn btn-outline-primary btn-block btn-social mb-3"></i>Восстановить <span
                                    class="d-none d-sm-inline">пароль</span></button>

                    </form>
                    <a href="{{ route('home') }}" class="close-absolute mr-md-5 mr-xl-6 pt-5">
                        <svg class="svg-icon w-3rem h-3rem">
                            <use xlink:href="#close-1"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
                <!-- Image-->
                <div style="background-image: url({{ url()->asset('/template/d19m59y37dris4.cloudfront.net/directory/1-1/img/photo/photo-1497436072909-60f360e1d4b1.jpg')  }});"
                     class="bg-cover h-100 mr-n3"></div>
            </div>
        </div>
    </div>
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
@endsection

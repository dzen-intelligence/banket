<body style="padding-top: 72px;">

<header class="header">
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center"><a href="{{ route('home') }}" class="navbar-brand py-1"><img
                            src={{ url()->asset('/img/logo.svg')  }} height="31px;" alt="Directory logo"></a>
                <form action="#" id="search" class="form-inline d-none d-sm-flex">
                    <div class="input-label-absolute input-label-absolute-left input-reset input-expand ml-lg-2 ml-xl-3">
                        <label for="search_search" class="label-absolute"><i class="fa fa-search"></i><span
                                    class="sr-only">What are you looking for?</span></label>
                        <input id="search_search" placeholder="банкетный зал ......" aria-label="банкетный з..."
                               class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                        <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"></i></button>
                    </div>
                </form>
            </div>
            <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i
                        class="fa fa-bars"></i></button>
            <!-- Navbar Collapse -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <form action="/search" method="post" id="searchcollapsed" class="form-inline mt-4 mb-2 d-sm-none">
                    <div class="input-label-absolute input-label-absolute-left input-reset w-100">
                        <label for="searchcollapsed_search" class="label-absolute"><i class="fa fa-search"></i><span
                                    class="sr-only">Что ищете?</span></label>
                        <input id="searchcollapsed_search" placeholder="банкетный з..." aria-label="Search"
                               class="form-control form-control-sm border-0 shadow-0 bg-gray-200">
                        <button type="reset" class="btn btn-reset btn-sm"><i class="fa-times fas"> </i></button>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">

                    @auth
                        <li class="nav-item"><a href="{{ url('/account') }}" class="nav-link">Личный кабинет</a></li>
                        <li class="nav-item"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">Выйти</a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Войти</a></li>
                    @endauth
                    <li class="nav-item mt-3 mt-lg-0 ml-lg-3 d-lg-none d-xl-inline-block"><a href="{{ route('accommodate') }}"
                                                                                             class="btn btn-primary">Разместиться</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->
</header>

<x-frontend-master-head />

<main class="main">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll" style="
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            z-index: 1;
          ">
        <div class="container">
            <img src="{{ asset('assets/img/sidomulyo2.png') }}" class="image-logo" alt="" /><button
                class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                    <!-- NAV LINK -->
                    <li class="nav-item px-2">
                        <a class="nav-link fw-medium active" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-medium active" href="{{url('/about')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-medium active" href="{{url('/products')}}">Produk</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-medium active" href="{{url('/client')}}">Klein Kami</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-medium active" href="{{url('/finishing-machine')}}">Finishing Machine</a>
                    </li>
                    <!-- NAV LINK -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

    @yield('content')

    <!-- FOOTER -->
    <footer class="text-center text-lg-start text-muted text-dark bg-primary-gradient" id="contact"
        style="position: absolute; left: 0px; right: 0px">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block"></div>
            <div class="">

                <a href="" class="me-4 text-white"><i class="fab fa-facebook-f"></i></a><a href=""
                    class="me-4 text-white"><i class="fab fa-twitter"></i></a><a href="" class="me-4 text-white"><i
                        class="fab fa-google"></i></a><a href="" class="me-4 text-white"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </section>
        <section class="py-0 bg-primary-gradient">
            <div class="bg-holder" style="
                background-image: url('{{asset('assets/img/illustrations/footer-bg.png')}}');
                background-position: center bottom;
                background-size: cover;
              "></div>
            <div class="container">
                <div class="row justify-content-lg-between pt-5">
                    {{-- FINISHING MACHINE --}}
                    <div class="col-6 col-sm-4 col-lg-4 mb-3" style="text-align: left">
                        <h5 class="mb-5 text-white text-uppercase">
                            Finishing Machine
                        </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            @isset($finishingMachines)
                            @for ($i = 0; $i < 4; $i++) <li class="mb-3">
                                <a class="text-light text-decoration-none">{{optional(isset($finishingMachines[$i]) ? $finishingMachines[$i] : null)->name}}</a>
                                </li>
                                @endfor
                                @endisset
                        </ul>
                    </div>
                    {{-- END FINISHING MACHINE --}}

                    {{-- PRODUCT --}}
                    <div class="col-6 col-sm-4 col-lg-4 mb-3" style="text-align: left">
                        <h5 class="mb-5 text-white text-uppercase">
                            Produk
                        </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            @isset($products)
                                @for ($i = 0; $i < 4; $i++)
                                    <li class="mb-3">
                                        <a class="text-light text-decoration-none"
                                         href="{{ url('/product', [optional(isset($products[$i]) ? $products[$i] : null)->id]) }}">{{optional(isset($products[$i]) ? $products[$i] : null)->name}}</a>
                                    </li>
                                @endfor
                            @endisset
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-4 mb-3" style="text-align: left">
                        <h5 class="mb-5 text-white text-uppercase">Kontak</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3">
                                <a class="text-light text-decoration-none"><i class="fas fa-home me-3"></i>Jl. Kartini
                                    PR 11 No
                                    108 Selasar Salatiga</a>
                            </li>
                            <li class="mb-3">
                                <a class="text-light text-decoration-none"><i
                                        class="fas fa-phone me-3"></i>{{optional(isset($contacts[1]) ? $contacts[1] : null)->value}}</a>
                            </li>
                            <li class="mb-3">
                                <a class="text-light text-decoration-none"><i
                                        class="fas fa-envelope me-3"></i>{{optional(isset($contacts[0]) ? $contacts[0] : null)->value}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-auto mb-3" style="text-align: left">
                        <h5 class="mb-5 text-white text-uppercase"></h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0"></ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-auto mb-3" style="text-align: left">
                        <h5 class="mb-5 text-white text-uppercase"></h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0"></ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05)">
            © Copyright 2022
        </div>
    </footer>
    <!-- END FOOTER -->
    <a href="https://api.whatsapp.com/send?phone={{optional(isset($contacts[1]) ? $contacts[1] : null)->value ?? '+6288808888880' }}&amp;text=Hola%21%20Sidomulyo%20%20Advertising."
        class="float" target="_blank"><i class="fab fa-whatsapp my-float"></i></a>
</main>

<x-frontend-master-footer />

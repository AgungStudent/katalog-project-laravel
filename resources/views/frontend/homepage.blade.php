@extends('template.frontend')

@section('content')

<!-- HEADER -->
<section class="pb-0" id="home" style="
          background-image: url('{{asset('assets/img/illustrations/blurry-gradient-haikei.svg')}}');
          background-size: cover;
        ">
    <div class="container">
        <div class="row flex-center">
            <div class="col-md-5 order-md-1 text-center text-md-end">
                <img class="img-fluid mb-4" src="{{ asset('assets/img/illustrations/printing.svg') }}" width="450"
                    alt="" />
            </div>
            <div class="col-md-5 text-center text-md-start">
                <h6 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3 text-uppercase">
                    Sidomulyo Advertising
                </h6>
                <p class="my-4 pe-xl-6 text-dark">
                    Merupakan salah satu perusahaan yang bergerak di bidang layanan
                    jasa digital printing&amp;Advertising dengan didukung oleh
                    mesin-mesin tercanggih dan terbaru,serta management SDM yg
                    profesional
                </p>
                <a class="btn btn-primary rounded-pill px-3" href="about">Tentang Kami</a>
            </div>
        </div>
    </div>
    <svg xmlns="{{ asset('assets/img/illustrations/wave.svg') }}" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,32L60,80C120,128,240,224,360,229.3C480,235,600,149,720,133.3C840,117,960,171,1080,160C1200,149,1320,75,1380,37.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- END HEADER -->
<hr class="featurette-divider" />
<!-- VISI MISI -->
<div class="py-5" id="visi-misi">
    <div class="container">
        <div class="mx-4 row text-sm-start">
            <div class="col-md-5 shadow-transition order-md-0 text-center text-md-start pt-3">
                <h6 class="fw-bold fs-1 fs-lg-3 display-3 lh-sm">Visi</h6>
                <p class="my-4 pe-xl-8">
                    Sebagai Problem Solving dan memberikan solusi tentang strategi
                    beriklan yang efektif dan efisien
                </p>
            </div>
            <div class="col-md-1">
                <hr class="hr-line" />
            </div>
            <div class="col-md-6 shadow-transition text-center text-md-start pt-3">
                <h6 class="fw-bold fs-1 fs-lg-3 display-3 lh-sm">Misi</h6>
                <ol class="text-start">
                    <li>Memberikan dan membuat hasil/karya iklan yang terbaik</li>
                    <li>Meningkatkan Pelayanan dibidang Advertising</li>
                    <li>
                        Mengembangkan SDM dan Ethos Kerja Perusahaan yang berkinerja
                        tinggi
                    </li>
                    <li>
                        Integritas yang dapat diandalkan dan menjadi pribadi yang
                        kreatif
                    </li>
                    <li>
                        Menjalin kerja sama yang saling menguntungkan dengan Mitra
                        Usaha
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- END VISI MISI -->
<hr class="featurette-divider" />
<section>
    <div class="container">
        <div class="row flex-center">
            <div class="col-md-5 order-md-0 text-center text-md-start">
                <img class="img-fluid mb-4" src="{{ asset('assets/img/illustrations/printing2.jpg') }}" width="450"
                    alt="" />
            </div>
            <div class="col-md-5 text-center text-md-start">
                <h5 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm">
                    Fasilitas dan<br />Mesin
                </h5>
                <p class="my-4 pe-xl-8">
                    CV.Sidomulyo Advertising didukung oleh mesin webprinting
                    teknologi terbaru, dengan kecepatan cetak yg yang mampu
                    merealisasikan proses pembuatan bermacam - macam produk dengan
                    ukuran bervariasi. Dan dibantu dengan SDM yang profesional.
                </p>
            </div>
        </div>
    </div>
</section>
<hr class="featurette-divider" />
<section class="py-8" style="background-color: rgb(247, 244, 244)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6 text-center mb-3">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">
                    Daftar Finishing Machine
                </h5>
                <h5 class="fw-light">
                    <a class="text-info" href="finishing-machine">Lihat semua <i class="fas fa-arrow-right"></i>
                    </a>
                </h5>
            </div>
        </div>
        <div class="row h-100">
            @foreach ($finishingMachines as $machine)
            @if ($loop->index <= 3) <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                <div class="card py-3 shadow-sm">
                    <a href="detail/1"><img class="image-zoom rounded" src="{{ asset('storage/'.$machine->image) }}"
                            width="90%" height="50%" alt="" /></a>
                    <div class="card-body px-2">
                        <h6 class="fw-bold fs-1 heading-color">{{$machine->name}}</h6>
                        <p class="mb-0 card-text text-left">{!! $machine->description !!}</p>
                    </div>
                </div>
        </div>
        @endif
        @endforeach
    </div>
    </div>
</section>
<hr class="featurette-divider" />

<!-- DAFTAR PRODUK -->
<div class="mt-5" style="
          background-image: url({{asset('assets/img/illustrations/bg-line.svg')}});
        ">
    <div class="container" id="product">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6 text-center mb-3">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Daftar Produk</h5>
                <h5 class="fw-light">
                    <a class="text-info" href="{{url('/products')}}">Lihat semua <i class="fas fa-arrow-right"></i>
                    </a>
                </h5>
            </div>
        </div>

        <!-- LIST DAFTAR PRODUK -->
        <div class="row flex-center h-100">
            <div class="col-11 col-xl-10">
                <div class="row">
                    @forelse ($products as $product)
                    <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                        <div class="card py-3 shadow-sm h-100 hover-top">
                            <div class="text-center">
                                <a href="detail/1"><img class="image-zoom rounded"
                                        src="{{ asset('storage/'.$product->image) }}" width="90%" alt="" /></a>
                                <div class="card-body px-2">
                                    <h6 class="fw-bold fs-1 heading-color">{{$product->name}}</h6>
                                    <p class="mb-0 card-text text-left">
                                        {!! str(strip_tags($product->specifications))->limit(50) !!}
                                    </p>
                                    <div class="mt-3">
                                        <a class="text-center p-2 d-block btn btn-outline-primary"
                                            href="{{route('detail',$product->id)}}">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center" role="alert">
                            Maaf, belum ada data produk
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- END LIST PRODUK -->
    </div>
</div>
<!-- END DAFTAR PRODUK -->
<!-- Klient -->
<div class="container text-center my-5" id="client">
    <h2 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Klein Kita</h2>
    <h5 class="my-2 fw-light"></h5>
    <div class="row mx-auto justify-content-center my-5" style="background-color: rgb(255, 255, 255)">
        @forelse ($clients as $client)
        <div class="col-6 col-md-2">
            <img src="{{ asset('storage/'.$client->image) }}" width="100" alt="{{$client->name}}" />
        </div>
        @empty
        <div class="col-md-12">
            <div class="alert alert-danger text-center" role="alert">
                belum ada klien
            </div>
        </div>
        @endforelse
    </div>
    <a class="text-info" href="{{url('/client')}}">Lihat semua <i class="fas fa-arrow-right"></i>
    </a>
</div>
<!-- END KLIEN -->
@endsection

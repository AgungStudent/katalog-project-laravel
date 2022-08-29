@extends('template.frontend')

@section('content')
<div
    style="background-image: url({{asset('assets/img/bg2.jpg')}}); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; background-position: center center;">
    <div class="px-4 py-7 text-center"><img class="d-block mx-auto mb-4" src="{{ asset('assets/img/sidomulyo2.png') }}" alt="">
        <h1 class="display-5 fw-bold text-shadow">Tentang Kami</h1>
        <div class="col-lg-6 mx-auto shadow-sm p-4">
            <p class="lead mb-4">Sidomulyo Advertising adalah salah satu perusahaan yang bergerak di bidang layanan jasa
                digital printing&amp;Advertising dengan didukung oleh mesin-mesin tercanggih dan terbaru,serta
                management SDM yg profesional.</p>
            <p class="lead mb-4">Berdiri pada tanggal 12 November 2020 dengan nama Sidomulyo, perusahaan ini memulai
                usaha dibidang Advertising. Seiring dengan berjalannya waktu serta permintaan konsumen, dengan
                mempelajari, memahami, memperbaiki, dan meningkatkan layanan serta kualitas produksi menjadi lebih
                baik.sekarang menambah layanan ke digital printing &amp; Event.</p>
        </div>
    </div>
    <section class="section about-section" id="about">
        <div class="container p-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-avatar"><img src="{{ asset('assets/img/company-icon.jpg') }}" width="100%" title="" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text go-to ms-2 mb-4">
                        <h3 class="dark-color">Profile Perusahaan</h3>
                        <h6 class="theme-color lead mb-2">Sidomulyo Advertising</h6>
                        <hr>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Alamat</label>
                                        <p>Jl. Kartini PR 11 No 108 Selasar Salatiga</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Telepon</label>
                                        <p>{{optional(isset($contacts[1]) ? $contacts[1] : null)->value}}</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Email</label>
                                        <p>{{optional(isset($contacts[0]) ? $contacts[0] : null)->value}}</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Bidang</label>
                                        <p>Advertising Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block"><label>Akte
                                            Pendirian</label>
                                        <p>12 November 2020</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Notaris</label>
                                        <p>Susi Haryati, SH., M.KN.</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>NIB</label>
                                        <p>0244010152804</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>NPWP</label>
                                        <p>96.571.368.8-505.000</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="media d-inline-flex justify-content-evenly d-sm-block">
                                        <label>Director</label>
                                        <p>Joshua Franco Wibowo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row justify-content-center"></div>
        <div class="container">
            <div class="row flex-center">
                <div class="col-md-5 order-md-1 text-center text-md-end"><img class="img-fluid mb-4"
                        src="{{ asset('assets/img/illustrations/printing4.jpg') }}" width="450" alt=""></div>
                <div class="col-md-5 text-center text-md-start">
                    <h6 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm"></h6>
                    <p class="my-4 pe-xl-8"></p>
                    <p class="my-4 pe-xl-8">Merupakan salah satu perusahaan yang bergerak di bidang layanan jasa digital
                        printing&amp;Advertising dengan didukung oleh mesin-mesin tercanggih dan terbaru,serta
                        management SDM yg profesional</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-5" id="visi-misi">
            <div class="container">
                <div class="mx-4 row text-sm-start">
                    <div class="col-md-5 shadow-transition order-md-0 text-center text-md-start pt-3">
                        <h6 class="fw-bold fs-1 fs-lg-3 display-3 lh-sm">Visi</h6>
                        <p class="my-4 pe-xl-8">Sebagai Problem Solving dan memberikan solusi tentang strategi beriklan
                            yang efektif dan efisien</p>
                    </div>
                    <div class="col-md-1">
                        <hr class="hr-line">
                    </div>
                    <div class="col-md-6 shadow-transition text-center text-md-start pt-3">
                        <h6 class="fw-bold fs-1 fs-lg-3 display-3 lh-sm">Misi</h6>
                        <ol class="text-start">
                            <li>Memberikan dan membuat hasil/karya iklan yang terbaik </li>
                            <li>Meningkatkan Pelayanan dibidang Advertising</li>
                            <li>Mengembangkan SDM dan Ethos Kerja Perusahaan yang berkinerja tinggi</li>
                            <li>Integritas yang dapat diandalkan dan menjadi pribadi yang kreatif</li>
                            <li>Menjalin kerja sama yang saling menguntungkan dengan Mitra Usaha </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

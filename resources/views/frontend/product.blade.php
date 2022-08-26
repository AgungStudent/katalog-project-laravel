@extends('template.frontend')

@section('content')
<div
    style="background-image: url(&quot;/assets/img/background.png&quot;); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div>
        <div></div>
        <div class="container" id="product"
            style="padding-top: 10vh; background-image: url(&quot;/assets/img/illustrations/category-bg.png&quot;); background-position: right center; background-repeat: no-repeat;">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6 text-center mb-3">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Daftar Produk</h5>
                    <hr class="">
                </div>
            </div>
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
                                        <p class="mb-0 card-text text-left">{{
                                            str(strip_tags($product->specifications))->limit(50) }}</p>
                                        <div class="mt-3">
                                            <a class="text-center p-2 d-block btn btn-outline-primary"
                                                href="{{route('detail',$product->id)}}">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <div class="alert alert-danger text-center" role="alert">
                            Data produk tidak ditemukan!
                        </div>
                        @endforelse
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

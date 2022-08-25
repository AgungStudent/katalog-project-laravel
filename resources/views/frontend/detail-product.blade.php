@extends('template.frontend')
@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row align-items-center">
            <div class="col-md-5"><img class="card-img-top mb-5 mb-md-0"
                    src="{{ asset('storage/'.$product->image) }}" alt="product"></div>
            <div class="col-md-7">
                <div class="small mb-1">Detail Produk</div>
                <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                <p class="lead">{!! $product->specifications !!}</p><a href="https://api.whatsapp.com/send?phone={{$contacts[1]->value ?? '+6288808888880' }}&amp;text=Hola%21%20Sidomulyo%20%20Advertising, Saya ingin memesan {{$product->name}}" target="_blank"
                    class="btn btn-success"> <i class="fab fa-whatsapp"></i> Pesan</a>
            </div>
        </div>
    </div>
</section>
@endsection

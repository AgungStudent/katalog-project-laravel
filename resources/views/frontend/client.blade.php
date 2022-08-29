@extends('template.frontend')

@section('content')
<div
    style="background-image: url({{asset('assets/img/background.png')}}); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div>
        <div></div>
        <div class="container" id="product" style="padding-top: 10vh;">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6 text-center mb-3">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Daftar Klein</h5>
                    <hr class="">
                </div>
            </div>
            <div class="row flex-center h-100">
                @forelse ($clients as $client)
                <div class="col-11 col-xl-4 p-3"><img src="{{ asset('storage/'.$client->image) }}"
                        alt="{{$client->name}}" class="image-zoom shadow-transition" width="300" height="150"></div>
                @empty
                <div class="col-md-12">
                    <div class="alert alert-danger text-center" role="alert">
                        belum ada klien
                    </div>
                </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-center mb-3">
                {{$clients->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

@extends('template.frontend')

@section('content')
<section class="py-8" style="background-color: rgb(247, 244, 244);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6 text-center mb-3">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Daftar Finishing Machine</h5>
            </div>
        </div>
        <div class="row h-100">
            @forelse ($finishingMachines as $machine)
            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                <div class="card py-3 shadow-sm h-100  ">
                    <div class="text-center"><a>
                        <img class="image-zoom rounded img-thumbnail resize-image"
                                src="{{ asset('storage/'.$machine->image) }}" width="90%" alt="finishing-machine"></a>
                        <div class="card-body px-2">
                            <h6 class="fw-bold fs-1 heading-color">{{$machine->name}}</h6>
                            <p class="mb-0 card-text text-left">{!! $machine->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class="alert alert-danger text-center" role="alert">
                    belum ada data <em>finishing machine</em>
                </div>
            </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mb-3">
            {{$finishingMachines->links()}}
        </div>

    </div>
</section>
@endsection

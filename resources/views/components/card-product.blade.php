<div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
    <div class="card py-3 shadow-sm h-100 hover-top">
        <div class="text-center">
            <a href="detail/1"><img class="image-zoom rounded" src="{{ asset('storage/'.$product->image) }}" width="90%"
                    alt="" /></a>
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

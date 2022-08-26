@extends('template.dashboard')

@section('header')
<i class="ml-2 fas fa-store"></i> Edit Produk
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"> <a href="{{route('product.index')}}">Produk</a> </li>
<li class="breadcrumb-item active">Edit Produk</li>
@endsection

@section('style')
<x-tinymce-config />
@endsection

@section('content')
<div class="col-md-8">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Produk:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name" value="{{$product->name}}"
                        placeholder="Form nama produk">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="image">Gambar Produk :</label><br>
                            <input type="file" id="image" name="image" class="@error('image') is-invalid @enderror"
                                onchange="previewImage()" accept="image/*">
                            @error('image')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('storage/'.$product->image)}}" alt="product" id="prev-image" class="rounded shadow" width="100px"
                            height="100px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mytiny">Spesifikasi: </label>
                    <textarea class="form-control @error('specifications') is-invalid @enderror " id="mytiny" rows="3"
                        name="specifications">{{$product->specifications}}</textarea>
                    @error('specifications')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-success">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')

<script>
    function previewImage() {
    const imgPreview = document.getElementById('prev-image')
    const inputImage = document.getElementById('image')

    imgPreview.classList.remove('d-none')
    const oFReader = new FileReader();
        oFReader.readAsDataURL(inputImage.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    console.log(imgPreview);
    }
</script>

@endsection

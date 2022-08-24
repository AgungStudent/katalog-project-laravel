@extends('template.dashboard')

@section('header')
Tambah Produk
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"> <a href="{{route('product.index')}}">Produk</a> </li>
<li class="breadcrumb-item active">Tambah Produk</li>
@endsection

@section('style')
<x-tinymce-config />
@endsection

@section('content')
<div class="col-md-8">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Tambah Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Produk:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name"
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
                        <img src="" alt="product" id="prev-image" class="d-none rounded shadow" width="100px"
                            height="100px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mytiny">Spesifikasi: </label>
                    <textarea class="form-control @error('specifications') is-invalid @enderror " id="mytiny" rows="3"
                        name="specifications"></textarea>
                    @error('specifications')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-info">Tambah</button>
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

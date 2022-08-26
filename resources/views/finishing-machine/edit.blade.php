@extends('template.dashboard')

@section('header')
<i class="nav-icon fas fa-cash-register ml-2"></i> Edit Finishing Machine
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"> <a href="{{route('finishing-machine.index')}}">Finishing Machine</a> </li>
<li class="breadcrumb-item active">Edit Finishing Machine</li>
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
        <form method="POST" action="{{route('finishing-machine.update', $finishingMachine->id)}}"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Finishing Machine:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name"
                        value="{{$finishingMachine->name}}" placeholder="Form nama produk">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="image">Gambar Finishing Machine :</label><br>
                            <input type="file" id="image" name="image" class="@error('image') is-invalid @enderror"
                                onchange="previewImage()" accept="image/*">
                            @error('image')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('storage/'.$finishingMachine->image)}}" alt="product" id="prev-image"
                            class="rounded shadow" width="100px" height="100px">
                    </div>
                </div>

                <div class="form-group">
                    <label for="mytiny">Description: </label>
                    <textarea class="form-control @error('description') is-invalid @enderror " id="mytiny" rows="3"
                        name="description">{{$finishingMachine->description}}</textarea>
                    @error('description')
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

@extends('template.dashboard')

@section('header')
Edit Klien Kita
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"> <a href="{{route('client.index')}}">Klien Kita</a> </li>
<li class="breadcrumb-item active">Edit Klien Kita</li>
@endsection

@section('style')
<x-tinymce-config />
@endsection

@section('content')
<div class="col-md-8">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-2"></i>Edit client</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{route('client.update', $client->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Klien Kita:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name" value="{{$client->name}}"
                        placeholder="Form nama produk">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="image">Gambar Klien Kita :</label><br>
                            <input type="file" id="image" name="image" class="@error('image') is-invalid @enderror"
                                onchange="previewImage()" accept="image/*">
                            @error('image')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('storage/'.$client->image)}}" alt="client" id="prev-image" class="rounded shadow" width="100px"
                            height="100px">
                    </div>
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

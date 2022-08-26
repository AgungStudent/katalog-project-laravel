@extends('template.dashboard')

@section('breadcrumb')

<li class="breadcrumb-item active">Kontak</li>

@endsection

@section('style')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endsection

@section('header')
<i class="ml-2 fas fa-address-card"></i> Kontak
@endsection

@section('content')
@foreach ($contacts as $contact)
<div class="card">
    <div class="row my-3 mx-3">
        <div class="col-md-6 ">
            <div class="col-9">
                <div class="info-box bg-info">

                    <span class="info-box-icon">
                        <i class="fas fa-address-card"></i>
                    </span>
                    <div class="info-box-content my-2">
                        <span class="info-box-number">{{$contact->name_contact}}</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                            {{$contact->value}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- small card -->

        </div>
        <div class="col-md-5">
            <form action="{{route('contact.update', $contact->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="{{$contact->name_contact}}">Edit {{$contact->name_contact}}</label>
                    <input type="text" class="form-control " id="{{$contact->name_contact}}" name="value"
                        placeholder="edit nilai" value="{{$contact->value}}">

                    {{-- @error('value')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror --}}
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('scripts')

@if (session('success'))
<script>
    Toast.fire({
                icon: 'success',
                title: '{{session('success')}}'
            })
</script>
@endif

<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    toastr.error("{{$error}}")
</script>
@endforeach
@endif

@endsection

@extends('template.auth')

@section('title')
   Reset Password
@endsection

@section('style')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')

<div class="card p-3 rounded shadow">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Form Reset Password</p>
        <form action="{{ route('user-password.update')}}" method="post">
            @csrf
            @method('put')

            <div class="input-group mb-3">
                <input type="password" class="form-control" name="current_password" placeholder="Password saat ini"
                    value="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-key"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-danger btn-block">Ubah Password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        {{-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p> --}}

    </div>
    <!-- /.login-card-body -->
</div>

@endsection

@section('scripts')
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

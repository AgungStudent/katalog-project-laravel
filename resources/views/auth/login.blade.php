@extends('template.auth')

@section('title')
Login
@endsection

@section('style')
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')

<div class="card p-3 rounded shadow">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Form Login Admin</p>
        <form action="{{ route('login')}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
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
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Ingat Aku
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
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
        <script> toastr.error("{{$error}}") </script>
    @endforeach
@endif

@endsection

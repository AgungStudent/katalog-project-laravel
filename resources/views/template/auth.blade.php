<x-backend-master-head />

<body class="hold-transition login-page">
<img src="{{asset('assets/img/sidomulyo2.png')}}" class="mb-2 shadow" alt="">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b class="text-uppercase">@yield('title')</b></a>
  </div>
  <!-- /.login-logo -->
  @yield('content')
</div>
<!-- /.login-box -->


<x-backend-master-footer/>

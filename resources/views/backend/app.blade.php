<!DOCTYPE html>
<html>
    @include('backend.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('backend.topnav')

  <!-- Main Sidebar Container -->
  @include('backend.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>


  @include('backend.footer')

  {{-- @include('sweetalert::alert') --}}
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


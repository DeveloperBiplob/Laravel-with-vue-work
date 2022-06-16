@extends('Backend.Layouts.app')
@section('app-content')

<div class="wrapper" id="app">

  <!-- Navbar -->
    @includeIf('Backend.Partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @includeIf('Backend.Partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- @includeIf('Backend.Partials.breadcrumb') --}}
    <!-- /.content-header -->
    @if(session('message'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
       {{ session('message') }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
    @endif
    <!-- Main content -->
    <section class="content mt-3">
      <div class="container-fluid">

        {{-- @yield('master-content') --}}
        <backend-app></backend-app>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @includeIf('Backend.Partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection

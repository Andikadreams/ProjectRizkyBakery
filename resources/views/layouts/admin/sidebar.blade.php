<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-0">
    <img src="{{ asset('img/logoRB-removebg-preview.png') }}" alt="Group Logo" width="130px" height="auto" class="brand-image img-circle elevation-1" style="opacity: .8">
    </div>
    <div class="sidebar-brand-text mx-3">Rb Admin <sup></sup></div>
  </a>
  <!-- <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/Group 1.png') }}" alt="Group Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold text-dark">Sahabat Tani</span>
    </a> -->

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  @if(Auth::user()->level == 'admin')
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'owner')
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard_owner') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'owner')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('user') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Manajemen User</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('produk') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Produk</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('kategori') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kategori</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'admin')
  <li class="nav-item">
<<<<<<< HEAD
    <a class="nav-link" href="{{route('pesanan')}}">
=======
    <a class="nav-link" href="{{ route('pesanan') }}">
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Pesanan</span></a>
  </li>
  @else
	@endif

  @if(Auth::user()->level == 'owner')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('laporan.penjualan') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Laporan Penjualan</span></a>
  </li>
  @else
	@endif
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>

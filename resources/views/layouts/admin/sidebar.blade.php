@if(Auth::user()->level == 'admin'||Auth::user()->level == 'owner')
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #212A3E">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-0">
    <img src="{{ asset('img/logoRB-removebg-preview.png') }}" alt="Group Logo" width="130px" height="auto" class="brand-image img-circle elevation-1" style="opacity: .8">
    </div>
    <div class="sidebar-brand-text mx-3">Rb Admin <sup></sup></div>
  </a>

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
    <a class="nav-link" href="{{ route('pesanan') }}">
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

  @if(Auth::user()->level == 'owner')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('rekening') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Tambah Rekening</span></a>
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
@endif

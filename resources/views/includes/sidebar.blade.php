<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-text mx-3"><i class="fas fa-check"></i> Niki Store</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

    <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('products.index') }}">
      <i class="menu-icon fa fa-list"></i>
      <span>Lihat barang</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('products.create') }}">
      <i class="menu-icon fa fa-plus"></i>
      <span>Tambah barang</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('product-galleries.index') }}">
      <i class="menu-icon fa fa-list"></i>
      <span>Lihat foto barang</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('product-galleries.create') }}">
      <i class="menu-icon fa fa-plus"></i>
      <span>Tambah foto barang</span>
    </a>
    <a class="nav-link collapsed" href="{{ route('transactions.index') }}">
      <i class="menu-icon fa fa-list"></i>
      <span>Lihat transaksi</span>
    </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('image/'. Auth::user()->foto) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
    <li><a href="{{Route('dashboard.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="{{Route('kategori.index')}}"><i class="fa fa-bars"></i> <span>kategori</span></a></li>
      <li><a href="{{Route('barang.index')}}"><i class="fa fa-gift"></i> <span>Barang</span></a></li>
      <li><a href="{{Route('keranjang.index')}}"><i class="fa fa-shopping-cart"></i> <span>Keranjang</span></a></li>
      <li><a href="{{Route('diskon.index')}}"><i class="fa fa-cut"></i> <span>Diskon</span></a></li>
      <li><a href="{{Route('retur.index')}}"><i class="fa fa-recycle"></i> <span>Retur</span></a></li>
      <li><a href="{{Route('komentar.index')}}"><i class="fa fa-pencil-square-o"></i> <span>Komentar</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-clipboard"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{Route('laporanbarang.index')}}"><i class="fa fa-circle-o"></i> Laporan Barang</a></li>
          <li><a href="{{Route('laporankeuangan.index')}}"><i class="fa fa-circle-o"></i> Laporan Keuangan</a></li>
          <li><a href="{{Route('laporantransaksi.index')}}"><i class="fa fa-circle-o"></i> Laporan Transaksi</a></li>
        </ul>
      </li>
      <li><a href="{{Route('user.index')}}"><i class="fa fa-group "></i> <span>User</span></a></li>
      <li><a href="{{Route('setting.index')}}"><i class="fa fa-laptop"></i> <span>Setting</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

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
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
    <li><a href="{{Route('dashboard.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="{{Route('kategori.index')}}"><i class="fa fa-bars"></i> <span>Category</span></a></li>
      <li><a href="{{Route('barang.index')}}"><i class="fa fa-gift"></i> <span>Product</span></a></li>
      <li><a href="{{Route('keranjang.index')}}"><i class="fa fa-shopping-cart"></i> <span>Keranjang</span></a></li>
      <li><a href="{{Route('diskon.index')}}"><i class="fa fa-cut"></i> <span>Discount</span></a></li>
      <li><a href="{{Route('retur.index')}}"><i class="fa fa-recycle"></i> <span>Reture</span></a></li>
      <li><a href="{{Route('komentar.index')}}"><i class="fa fa-pencil-square-o"></i> <span>Comments</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-clipboard"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{Route('laporanbarang.index')}}"><i class="fa fa-circle-o"></i> Product Report</a></li>
          <li><a href="{{Route('laporankeuangan.index')}}"><i class="fa fa-circle-o"></i> Financial statements</a></li>
          <li><a href="{{Route('laporantransaksi.index')}}"><i class="fa fa-circle-o"></i> Transaction Report</a></li>
        </ul>
      </li>

      <li><a href="{{Route('about.index')}}"><i class="fa fa-info"></i> <span>About</span></a></li>
      @if (Auth::guard('web')->check())
         @if (Auth::guard('web')->user()->jabatan == 'owner')
      <li><a href="{{Route('user.index')}}"><i class="fa fa-group "></i> <span>User</span></a></li>
      @elseif (Auth::guard('web')->user()->jabatan == 'superadmin')
      <li><a href="{{Route('user.index')}}"><i class="fa fa-group "></i> <span>User</span></a></li>
      @endif
      @endif
      <li><a href="{{Route('setting.index')}}"><i class="fa fa-laptop"></i> <span>Setting</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

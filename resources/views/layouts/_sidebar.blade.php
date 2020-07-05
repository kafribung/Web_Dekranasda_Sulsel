  <!-- Left Panel -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                    <a href="/dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">Manajemen</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'admin' ? 'active' : ''}}">
                    <a href="/admin"> <i class="menu-icon ti-user"></i>Admin</a>
                </li>

                <li class="menu-title">Anggota</li>

                <!-- /.menu-title -->
                <li class=" {{Request()->segment(1) == 'member' ? 'active' : ''}}">
                    <a href="/member"> <i class="menu-icon ti-signal"></i>Data Anggota</a>
                </li>

                <li class="menu-title">Produk</li>

                <!-- /.menu-title -->
                <li class=" {{Request::segment(1) == 'product-category' ? 'active' : ''}}">
                    <a href="/product-category"> <i class="menu-icon ti-layout"></i>Kategori Produk</a>
                </li>
                
                <li class=" {{Request()->is('product') ? 'active' : ''}}">
                    <a href="/product"> <i class="menu-icon ti-shopping-cart-full"></i>Data Produk</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
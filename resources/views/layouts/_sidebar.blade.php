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

                  <li class=" {{Request()->segment(1) =='product' ? 'active' : ''}}">
                      <a href="/product"> <i class="menu-icon ti-shopping-cart-full"></i>Data Produk</a>
                  </li>

                  <li class="menu-title">Kegiatan</li>
                  <!-- /.menu-title -->
                  <li class=" {{Request::segment(1) == 'activity' ? 'active' : ''}}">
                      <a href="/activity"> <i class="menu-icon ti-wand"></i>Data Kegiatan</a>
                  </li>
                  <li class=" {{Request::segment(1) == 'comment-activity' ? 'active' : ''}}">
                      <a href="/comment-activity"> <i class="menu-icon ti-comment-alt"></i>Komentar Kegiatan</a>
                  </li>

                  <li class="menu-title">Blog</li>
                  <!-- /.menu-title -->
                  <li class=" {{Request::segment(1) == 'blog' ? 'active' : ''}}">
                      <a href="/blog"> <i class="menu-icon ti-world"></i>Data Blog</a>
                  </li>
                  <li class=" {{Request::segment(1) == 'comment-blog' ? 'active' : ''}}">
                      <a href="/comment-blog"> <i class="menu-icon ti-comment-alt"></i>Komentar Blog</a>
                  </li>

              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
  </aside>
  <!-- /#left-panel -->

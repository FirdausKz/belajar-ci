<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
  <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
    <i class="bi bi-house-door-fill"></i>
      <span>Home</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
  <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/keranjang">
      <i class="bi bi-cart-fill"></i>
      <span>Keranjang</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->
        <?php
        }
        ?>
    <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="profil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
    </li>
</ul>
</aside>
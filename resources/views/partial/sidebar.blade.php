<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="/assets/img/logo_infolahta-removebg-preview.png" alt="Girl in a jacket" width="30" height="30">

        </span>
        <span class=" demo menu-text fw-bolder ms-2">INFOLAHTA</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{url('/home')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Home</div>
        </a>
      </li>

      <!-- Layouts -->
      <li class="menu-item">
        <a href="{{url('/datapinjaman')}}" class="menu-link">
            <i class='menu-icon bx bxs-data'></i>
            <div data-i18n="Analytics">Daftar Peminjam</div>
          </a>
      </li>
      <li class="menu-item">
        <a href="index.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Laporan</div>
        </a>
      </li>
    </ul>
  </aside>

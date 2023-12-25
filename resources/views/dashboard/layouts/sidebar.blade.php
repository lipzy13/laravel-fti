<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pegawai*') ? 'active' : ' ' }}" aria-current="page" href="/dashboard/pegawai">
            <span data-feather="user"></span>
            Pegawai
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pimpinan') ? 'active' : ' ' }}" href="#">
            <span data-feather="file"></span>
            Pimpinan
          </a>
        </li>
      </ul>
    </div>
  </nav>
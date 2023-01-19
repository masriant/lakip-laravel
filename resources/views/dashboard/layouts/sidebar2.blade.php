<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts">
            <span data-feather="home"></span>
            {{-- Dashboard --}}
            My Post
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}" href="/dashboard/admin">
            <span data-feather="file-text"></span>
            My Post
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/admin*') ? 'active' : '' }}" href="/dashboard/admin/">
            <span data-feather="file-text"></span>
            Category
          </a>
        </li>
      </ul>
    </div>
  </nav>
